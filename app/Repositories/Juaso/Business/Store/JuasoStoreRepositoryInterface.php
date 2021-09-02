<?php

namespace App\Repositories\Juaso\Business\Store;

use App\Models\Business\Store\Store\Store;
use Illuminate\Http\JsonResponse;

interface JuasoStoreRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function show( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function destroy( Store $store ) : JsonResponse;
}
