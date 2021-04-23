<?php

namespace App\Repositories\Store;

use App\Http\Requests\Store\StoreRequest;
use App\Models\Store\Store;
use Illuminate\Http\JsonResponse;

interface StoreRepositoryInterface
{
    /**
     * @return JsonResponse|mixed
     */
    public function index() : JsonResponse;

    /**
     * @param StoreRequest $storeRequest
     * @return JsonResponse|mixed
     */
    public function store( StoreRequest $storeRequest ) : JsonResponse;

    /**
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function show( Store $store ) : JsonResponse;

    /**
     * @param StoreRequest $storeRequest
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function update( StoreRequest $storeRequest, Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function destroy( Store $store ) : JsonResponse;
}
