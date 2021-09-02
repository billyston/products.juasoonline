<?php

namespace App\Repositories\Business\Resource\Store\Store;

use App\Http\Requests\Business\Resource\Store\Store\StoreRequest;
use App\Models\Business\Store\Store\Store;
use Illuminate\Http\JsonResponse;

interface StoreRepositoryInterface
{


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
}
