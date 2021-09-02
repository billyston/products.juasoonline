<?php

namespace App\Repositories\Business\Resource\Store\StoreSubcategory;

use App\Http\Requests\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRequest;
use App\Http\Resources\Business\Resource\Store\StoreSubcategory\StoreSubcategoryResource;
use App\Jobs\Business\Resource\Store\StoreSubcategory\CreateStoreSubcategory;
use App\Jobs\Business\Resource\Store\StoreSubcategory\UpdateStoreSubcategory;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class StoreSubcategoryRepository implements StoreSubcategoryRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param StoreCategory $storeCategory
     * @return JsonResponse
     */
    public function index( StoreCategory $storeCategory ) : JsonResponse
    {
        $Subcategory = StoreSubcategory::query() -> when( $this -> loadRelationships(), function (Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> get();
        return $this -> successResponse( StoreSubcategoryResource::collection( $Subcategory ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategoryRequest $storeSubcategoryRequest
     * @return JsonResponse
     */
    public function store( StoreCategory $storeCategory, StoreSubcategoryRequest $storeSubcategoryRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateStoreSubcategory( $storeCategory, $storeSubcategoryRequest ) ) -> handle(), "Success", "Subcategory created", Response::HTTP_CREATED );
    }

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function show( StoreCategory $storeCategory, StoreSubcategory $storeSubcategory ) : JsonResponse
    {
//        checkResourceRelation( $storeCategory -> subcategories() -> where( 'store_subcategories.id', $storeSubcategory -> id ) -> count());
        if ( $this -> loadRelationships() ) { $storeSubcategory -> load( $this -> relationships ); }
        return $this -> successResponse( new StoreSubcategoryResource( $storeSubcategory ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategoryRequest $storeSubcategoryRequest
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function update( StoreCategory $storeCategory, StoreSubcategoryRequest $storeSubcategoryRequest, StoreSubcategory $storeSubcategory ) : JsonResponse
    {
//        checkResourceRelation( $storeCategory -> subcategories() -> where( 'store_subcategories.id', $storeSubcategory -> id ) -> count());
        return $this -> successResponse( ( new UpdateStoreSubcategory( $storeSubcategoryRequest, $storeSubcategory ) ) -> handle(), 'Success', 'Subcategory updated', Response::HTTP_OK );
    }

    /**
     * @param StoreCategory $storeCategory
     * @param StoreSubcategory $storeSubcategory
     * @return JsonResponse
     */
    public function destroy( StoreCategory $storeCategory, StoreSubcategory $storeSubcategory ) : JsonResponse
    {
        try
        {
//            checkResourceRelation( $storeCategory -> subcategories() -> where( 'store_subcategories.id', $storeCategory -> id ) -> count());
            $storeSubcategory -> delete();
            return $this -> successResponse( null, 'Success', 'Subcategory deleted.', Response::HTTP_NO_CONTENT );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
