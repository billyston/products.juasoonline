<?php

namespace App\Repositories\Category;

use App\Http\Requests\Category\CategoryRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Jobs\Category\StoreCategory;
use App\Jobs\Category\UpdateCategory;
use App\Models\Category\Category;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CategoryRepository implements CategoryRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index()
    {
        $Category = Category::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( CategoryResource::collection( $Category ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param CategoryRequest $categoryRequest
     * @return JsonResponse|mixed
     */
    public function store( CategoryRequest $categoryRequest )
    {
        return $this -> successResponse( ( new StoreCategory( $categoryRequest ) ) -> handle(), "Success", "Product created successfully", Response::HTTP_CREATED );
    }

    /**
     * @param Category $category
     * @return JsonResponse|mixed
     */
    public function show( Category $category )
    {
        if ( $this -> loadRelationships() ) { $category -> load( $this -> relationships ); }
        return $this -> successResponse( new CategoryResource( $category ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param CategoryRequest $categoryRequest
     * @param Category $category
     * @return JsonResponse|mixed
     */
    public function update( CategoryRequest $categoryRequest, Category $category )
    {
        return $this -> successResponse( ( new UpdateCategory( $categoryRequest, $category ) ) -> handle(), 'Success', 'Product updated successfully', Response::HTTP_OK );
    }

    /**
     * @param Category $category
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy( Category $category )
    {
        $category -> delete();
        return $this -> successResponse( null, 'Success', 'Category deleted successfully', Response::HTTP_NO_CONTENT );
    }
}
