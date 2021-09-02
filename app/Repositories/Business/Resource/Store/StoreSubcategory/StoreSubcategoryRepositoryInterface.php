<?php

namespace App\Repositories\Business\Resource\Store\StoreSubcategory;

use App\Http\Requests\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRequest;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;
use Illuminate\Http\JsonResponse;

interface StoreSubcategoryRepositoryInterface
{
    /**
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function index( StoreCategory $storeCategory ) : JsonResponse;

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategoryRequest $storeSubcategoryRequest
     * @return JsonResponse
     */
    public function store( StoreCategory $storeCategory, StoreSubcategoryRequest $storeSubcategoryRequest ) : JsonResponse;

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function show( StoreCategory $storeCategory, StoreSubcategory $storeSubcategory ) : JsonResponse;

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategoryRequest $storeSubcategoryRequest
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function update( StoreCategory $storeCategory, StoreSubcategoryRequest $storeSubcategoryRequest, StoreSubcategory $storeSubcategory ) : JsonResponse;

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function destroy( StoreCategory $storeCategory, StoreSubcategory $storeSubcategory ) : JsonResponse;
}
