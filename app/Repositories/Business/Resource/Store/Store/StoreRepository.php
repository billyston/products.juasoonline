<?php

namespace App\Repositories\Business\Resource\Store\Store;

use App\Http\Requests\Business\Resource\Store\Store\StoreRequest;
use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
use App\Jobs\Business\Resource\Store\Store\CreateStore;
use App\Jobs\Business\Resource\Store\Store\UpdateStore;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class StoreRepository implements StoreRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param StoreRequest $storeRequest
     * @return JsonResponse|mixed
     */
    public function store( StoreRequest $storeRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateStore( $storeRequest ) ) -> handle(), "Success", "Store created", Response::HTTP_CREATED );
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
     * @param StoreRequest $storeRequest
     * @param Store $store
     * @return JsonResponse
     */
    public function update( StoreRequest $storeRequest, Store $store ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $store -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateStore( $storeRequest, $store ) ) -> handle(), 'Success', 'Store updated', Response::HTTP_OK );
    }
}
