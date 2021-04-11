<?php

namespace App\Repositories\Store\StoreAdministrator;

use App\Http\Requests\Store\StoreAdministrator\StoreAdministratorRequest;
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
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function show( StoreAdministrator $storeAdministrator ) : JsonResponse;

    /**
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function update( StoreAdministratorRequest $storeAdministratorRequest, StoreAdministrator $storeAdministrator )  : JsonResponse;

    /**
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function destroy( StoreAdministrator $storeAdministrator ) : JsonResponse;
}
