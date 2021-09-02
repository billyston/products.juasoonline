<?php

namespace App\Repositories\Business\Resource\Store\StoreAdministrator;

use App\Http\Requests\Business\Resource\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Http\Resources\Business\Resource\Store\StoreAdministrator\StoreAdministratorResource;
use App\Jobs\Business\Resource\Store\StoreAdministrator\CreateStoreAdministrator;
use App\Jobs\Business\Resource\Store\StoreAdministrator\UpdateStoreAdministrator;
use App\Models\Business\Store\Store\Store;
use App\Models\Business\Store\StoreAdministrator\StoreAdministrator;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class StoreAdministratorRepository implements StoreAdministratorRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @param Store $store
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @return JsonResponse
     */
    public function store( Store $store, StoreAdministratorRequest $storeAdministratorRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateStoreAdministrator( $storeAdministratorRequest ) ) -> handle(), "Success", "Administrator created", Response::HTTP_CREATED );
    }

    /**
     * @param Store $store
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function show( Store $store, StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        checkResourceRelation( $store -> administrator() -> where( 'store_administrators.id', $storeAdministrator -> id ) -> count());
        if ( $this -> loadRelationships() ) { $storeAdministrator -> load( $this -> relationships ); }
        return $this -> successResponse( new StoreAdministratorResource( $storeAdministrator ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function update( Store $store, StoreAdministratorRequest $storeAdministratorRequest, StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        checkResourceRelation( $store -> administrator() -> where( 'store_administrators.id', $storeAdministrator -> id ) -> count());
        if ( $this -> loadRelationships() ) { $storeAdministrator -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateStoreAdministrator( $storeAdministratorRequest, $storeAdministrator ) ) -> handle(), 'Success', 'Shop updated successfully', Response::HTTP_OK );
    }
}
