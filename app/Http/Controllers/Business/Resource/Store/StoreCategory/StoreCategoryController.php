<?php

namespace App\Http\Controllers\Business\Resource\Store\StoreCategory;

use App\Repositories\Business\Resource\Store\StoreCategory\StoreCategoryRepositoryInterface;
use App\Http\Requests\Business\Resource\Store\StoreCategory\StoreCategoryRequest;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Models\Business\Store\Store\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class StoreCategoryController extends Controller
{
    private StoreCategoryRepositoryInterface $theRepository;

    /**
     * BranchController constructor.
     * @param StoreCategoryRepositoryInterface $storeCategoryRepository
     */
    public function __construct( StoreCategoryRepositoryInterface $storeCategoryRepository )
    {
        $this -> theRepository = $storeCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> index( $store );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Store $store
     * @param StoreCategoryRequest $storeCategoryRequest
     * @return JsonResponse
     */
    public function store( Store $store, StoreCategoryRequest $storeCategoryRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $store, $storeCategoryRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Store $store
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function show( Store $store, StoreCategory $storeCategory ) : JsonResponse
    {
        return $this -> theRepository -> show( $store, $storeCategory );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @param StoreCategoryRequest $storeCategoryRequest
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function update( Store $store, StoreCategoryRequest $storeCategoryRequest, StoreCategory $storeCategory ) : JsonResponse
    {
        return $this -> theRepository -> update( $store, $storeCategoryRequest, $storeCategory );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Store $store
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function destroy( Store $store, StoreCategory $storeCategory ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $store, $storeCategory );
    }
}
