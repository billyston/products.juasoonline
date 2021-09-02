<?php

namespace App\Repositories\Business\Resource\Store\StoreCategory;

use App\Http\Requests\Business\Resource\Store\StoreCategory\StoreCategoryRequest;
use App\Http\Resources\Business\Resource\Store\StoreCategory\StoreCategoryResource;
use App\Jobs\Business\Resource\Store\StoreCategory\CreateStoreCategory;
use App\Jobs\Business\Resource\Store\StoreCategory\UpdateStoreCategory;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class StoreCategoryRepository implements StoreCategoryRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        $storeCategory = StoreCategory::query() -> when( $this -> loadRelationships(), function (Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> get();
        return $this -> successResponse( StoreCategoryResource::collection( $storeCategory ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param StoreCategoryRequest $storeCategoryRequest
     * @return JsonResponse
     */
    public function store( Store $store, StoreCategoryRequest $storeCategoryRequest) : JsonResponse
    {
        return $this -> successResponse( ( new CreateStoreCategory( $store, $storeCategoryRequest ) ) -> handle(), "Success", "Category created", Response::HTTP_CREATED );
    }

    /**
     * @param Store $store
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function show( Store $store, StoreCategory $storeCategory ) : JsonResponse
    {
//        checkResourceRelation( $store -> categories() -> where( 'stores_categories.id', $storeCategory -> id ) -> count());
        if ( $this -> loadRelationships() ) { $storeCategory -> load( $this -> relationships ); }
        return $this -> successResponse( new StoreCategoryResource( $storeCategory ), "Success", null, Response::HTTP_OK );
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
//        checkResourceRelation( $store -> categories() -> where( 'store_categories.id', $storeCategory -> id ) -> count());
        return $this -> successResponse( ( new UpdateStoreCategory( $storeCategoryRequest, $storeCategory ) ) -> handle(), 'Success', 'Category updated', Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param StoreCategory $storeCategory
     * @return JsonResponse|mixed
     */
    public function destroy( Store $store, StoreCategory $storeCategory ) : JsonResponse
    {
        try
        {
            checkResourceRelation( $store -> categories() -> where( 'store_categories.id', $storeCategory -> id ) -> count());
            $storeCategory -> delete();
            return $this -> successResponse( null, 'Success', 'Category deleted.', Response::HTTP_NO_CONTENT );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
