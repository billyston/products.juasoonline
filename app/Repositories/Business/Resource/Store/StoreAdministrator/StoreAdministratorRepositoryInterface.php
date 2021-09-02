<?php

namespace App\Repositories\Business\Resource\Store\StoreAdministrator;

use App\Http\Requests\Business\Resource\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Models\Business\Store\Store\Store;
use App\Models\Business\Store\StoreAdministrator\StoreAdministrator;
use Illuminate\Http\JsonResponse;

interface StoreAdministratorRepositoryInterface
{
    /**
     * @param Store $store
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @return JsonResponse
     */
    public function store( Store $store, StoreAdministratorRequest $storeAdministratorRequest ) : JsonResponse;

    /**
     * @param Store $store
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function show( Store $store, StoreAdministrator $storeAdministrator ) : JsonResponse;

    /**
     * @param Store $store
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function update( Store $store, StoreAdministratorRequest $storeAdministratorRequest, StoreAdministrator $storeAdministrator )  : JsonResponse;
}
