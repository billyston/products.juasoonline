<?php

namespace App\Repositories\Business\Resource\Store\StoreCategory;

use App\Http\Requests\Business\Resource\Store\StoreCategory\StoreCategoryRequest;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Models\Business\Store\Store\Store;
use Illuminate\Http\JsonResponse;

interface StoreCategoryRepositoryInterface
{
    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @param StoreCategoryRequest $storeCategoryRequest
     * @return JsonResponse
     */
    public function store( Store $store, StoreCategoryRequest $storeCategoryRequest ) : JsonResponse;

    /**
     * @param Store $store
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function show( Store $store, StoreCategory $storeCategory ) : JsonResponse;

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @param StoreCategoryRequest $storeCategoryRequest
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function update( Store $store, StoreCategoryRequest $storeCategoryRequest, StoreCategory $storeCategory ) : JsonResponse;

    /**
     * @param Store $store
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function destroy( Store $store, StoreCategory $storeCategory ) : JsonResponse;
}
