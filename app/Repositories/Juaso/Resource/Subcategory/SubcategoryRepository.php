<?php

namespace App\Repositories\Juaso\Resource\Subcategory;

use App\Http\Requests\Juaso\Resource\Subcategory\SubcategoryRequest;
use App\Http\Resources\Juaso\Resource\Subcategory\SubcategoryResource;
use App\Jobs\Juaso\Resource\Subcategory\CreateSubcategory;
use App\Jobs\Juaso\Resource\Subcategory\UpdateSubcategory;
use App\Models\Juaso\Subcategory\Subcategory;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SubcategoryRepository implements SubcategoryRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse|mixed
     */
    public function index() : JsonResponse
    {
        $Subcategory = Subcategory::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> get();
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
        if ( $this -> loadRelationships() ) { $subcategory -> load( $this -> relationships ); }
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
