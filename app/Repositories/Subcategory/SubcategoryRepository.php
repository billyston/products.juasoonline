<?php

namespace App\Repositories\Subcategory;

use App\Http\Requests\Subcategory\SubcategoryRequest;
use App\Http\Resources\Subcategory\SubcategoryResource;
use App\Jobs\Subcategory\CreateSubcategory;
use App\Jobs\Subcategory\UpdateSubcategory;
use App\Models\Subcategory\Subcategory;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SubcategoryRepository implements SubcategoryRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse|mixed
     */
    public function index() : JsonResponse
    {
        $Subcategory = Subcategory::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( SubcategoryResource::collection( $Subcategory ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SubcategoryRequest $subcategoryRequest
     * @return JsonResponse|mixed
     */
    public function store( SubcategoryRequest $subcategoryRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateSubcategory( $subcategoryRequest ) ) -> handle(), "Success", "Subcategory created", Response::HTTP_CREATED );
    }

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse|mixed
     */
    public function show( Subcategory $subcategory ) : JsonResponse
    {
        return $this -> successResponse( new SubcategoryResource( $subcategory ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SubcategoryRequest $subcategoryRequest
     * @param Subcategory $subcategory
     * @return JsonResponse|mixed
     */
    public function update( SubcategoryRequest $subcategoryRequest, Subcategory $subcategory ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateSubcategory( $subcategoryRequest, $subcategory ) ) -> handle(), 'Success', 'Subcategory updated', Response::HTTP_OK );
    }

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse|mixed
     * @throws Exception
     */
    public function destroy( Subcategory $subcategory ) : JsonResponse
    {
        $subcategory -> delete();
        return $this -> successResponse( null, 'Success', 'Subcategory deleted', Response::HTTP_NO_CONTENT );
    }
}
