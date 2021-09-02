<?php

namespace App\Http\Controllers\Business\Resource\Store\StoreSubcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRequest;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;
use App\Repositories\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StoreSubcategoryController extends Controller
{
    private StoreSubcategoryRepositoryInterface $theRepository;

    /**
     * BranchController constructor.
     * @param StoreSubcategoryRepositoryInterface $storeSubcategoryRepository
     */
    public function __construct( StoreSubcategoryRepositoryInterface $storeSubcategoryRepository )
    {
        $this -> theRepository = $storeSubcategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function index( StoreCategory $storeCategory ) : JsonResponse
    {
        return $this -> theRepository -> index( $storeCategory );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategory $storeCategory
     * @param StoreSubcategoryRequest $storeSubcategoryRequest
     * @return JsonResponse
     */
    public function store( StoreCategory $storeCategory, StoreSubcategoryRequest $storeSubcategoryRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $storeCategory, $storeSubcategoryRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param StoreCategory $storeCategory
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function show( StoreCategory $storeCategory, StoreSubcategory $storeSubcategory ) : JsonResponse
    {
        return $this -> theRepository -> show( $storeCategory, $storeSubcategory );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreCategory $storeCategory
     * @param StoreSubcategoryRequest $storeSubcategoryRequest
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function update( StoreCategory $storeCategory, StoreSubcategoryRequest $storeSubcategoryRequest, StoreSubcategory $storeSubcategory ) : JsonResponse
    {
        return $this -> theRepository -> update( $storeCategory, $storeSubcategoryRequest, $storeSubcategory );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StoreCategory $storeCategory
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function destroy( StoreCategory $storeCategory, StoreSubcategory $storeSubcategory ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $storeCategory, $storeSubcategory );
    }
}
