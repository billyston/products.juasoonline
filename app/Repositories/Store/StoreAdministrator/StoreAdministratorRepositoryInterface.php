<?php

namespace App\Repositories\Store\StoreAdministrator;

use App\Http\Requests\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Models\Store\Store;
use App\Models\Store\StoreAdministrator\StoreAdministrator;
use Illuminate\Http\JsonResponse;

interface StoreAdministratorRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @return JsonResponse
     */
    public function store( StoreAdministratorRequest $storeAdministratorRequest ) : JsonResponse;

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

    /**
     * @param Store $store
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function destroy( Store $store, StoreAdministrator $storeAdministrator ) : JsonResponse;
}
