<?php

namespace App\Repositories\Subcategory;

use App\Http\Requests\Subcategory\SubcategoryRequest;
use App\Http\Resources\Subcategory\SubcategoryResource;
use App\Jobs\Subcategory\StoreSubcategory;
use App\Jobs\Subcategory\UpdateSubcategory;
use App\Models\Subcategory\Subcategory;
use App\Traits\apiResponseBuilder;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SubcategoryRepository implements SubcategoryRepositoryInterface
{
    use apiResponseBuilder;

    /**
     * @return JsonResponse|mixed
     */
    public function index()
    {
        return $this -> successResponse( SubcategoryResource::collection( Subcategory::paginate( 20 ) ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SubcategoryRequest $subcategoryRequest
     * @return JsonResponse|mixed
     */
    public function store( SubcategoryRequest $subcategoryRequest )
    {
        return $this -> successResponse( ( new StoreSubcategory( $subcategoryRequest ) ) -> handle(), "Success", "Product created successfully", Response::HTTP_CREATED );
    }

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse|mixed
     */
    public function show( Subcategory $subcategory )
    {
        return $this -> successResponse( new SubcategoryResource( $subcategory ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SubcategoryRequest $subcategoryRequest
     * @param Subcategory $subcategory
     * @return JsonResponse|mixed
     */
    public function update( SubcategoryRequest $subcategoryRequest, Subcategory $subcategory )
    {
        return $this -> successResponse( ( new UpdateSubcategory( $subcategoryRequest, $subcategory ) ) -> handle(), 'Success', 'Product updated successfully', Response::HTTP_OK );
    }

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse|mixed
     * @throws Exception
     */
    public function destroy( Subcategory $subcategory )
    {
        $subcategory -> delete();
        return $this -> successResponse( null, 'Success', 'Category deleted successfully', Response::HTTP_NO_CONTENT );
    }
}
