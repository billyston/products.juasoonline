<?php

namespace App\Repositories\Store\StoreAdministrator;

use App\Http\Requests\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Http\Resources\Store\StoreAdministrator\StoreAdministratorResource;
use App\Jobs\Store\StoreAdministrator\CreateStoreAdministrator;
use App\Jobs\Store\StoreAdministrator\UpdateStoreAdministrator;
use App\Models\Store\StoreAdministrator\StoreAdministrator;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Exception;

class StoreAdministratorRepository implements StoreAdministratorRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $storeAdministrator = StoreAdministrator::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( StoreAdministratorResource::collection( $storeAdministrator ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @return JsonResponse
     */
    public function store( StoreAdministratorRequest $storeAdministratorRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateStoreAdministrator( $storeAdministratorRequest ) ) -> handle(), "Success", "Administrator created", Response::HTTP_CREATED );
    }

    /**
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function show( StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $storeAdministrator -> load( $this -> relationships ); }
        return $this -> successResponse( new StoreAdministratorResource( $storeAdministrator ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function update( StoreAdministratorRequest $storeAdministratorRequest, StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $storeAdministrator -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateStoreAdministrator( $storeAdministratorRequest, $storeAdministrator ) ) -> handle(), 'Success', 'Shop updated successfully', Response::HTTP_OK );
    }

    /**
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse|mixed|void
     */
    public function destroy( StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        try
        {
            $storeAdministrator -> delete();
            return $this -> successResponse( null, 'Success', 'Administrator deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
