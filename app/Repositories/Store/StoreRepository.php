<?php

namespace App\Repositories\Store;

use App\Http\Requests\Store\StoreRequest;
use App\Http\Resources\Store\StoreResource;
use App\Jobs\Store\CreateStore;
use App\Jobs\Store\UpdateStore;
use App\Models\Store\Store;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Exception;

class StoreRepository implements StoreRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Store = Store::query() -> when( $this -> loadRelationships(), function (Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( StoreResource::collection( $Store ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param StoreRequest $storeRequest
     * @return JsonResponse
     */
    public function store( StoreRequest $storeRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateStore( $storeRequest ) ) -> handle(), "Success", "Store created", Response::HTTP_CREATED );
    }

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function show( Store $store ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $store -> load( $this -> relationships ); }
        return $this -> successResponse( new StoreResource( $store ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param StoreRequest $storeRequest
     * @param Store $store
     * @return JsonResponse
     */
    public function update(StoreRequest $storeRequest, Store $store ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $store -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateStore( $storeRequest, $store ) ) -> handle(), 'Success', 'Store updated', Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @return JsonResponse|mixed|void
     */
    public function destroy( Store $store ) : JsonResponse
    {
        try
        {
            $store -> delete();
            return $this -> successResponse( null, 'Success', 'Store deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
