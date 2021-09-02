<?php

namespace App\Repositories\Juaso\Business\Store;

use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class JuasoStoreRepository implements JuasoStoreRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Store = Store::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> get();
        return $this -> successResponse( StoreResource::collection( $Store ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function show( Store $store ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $store -> load( $this -> relationships ); }
        return $this -> successResponse( new StoreResource( $store ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @return JsonResponse|mixed
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
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
