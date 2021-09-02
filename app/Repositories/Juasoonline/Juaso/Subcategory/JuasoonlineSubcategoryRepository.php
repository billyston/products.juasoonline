<?php

namespace App\Repositories\Juasoonline\Juaso\Subcategory;

use App\Http\Resources\Juaso\Resource\Subcategory\SubcategoryResource;
use App\Models\Juaso\Subcategory\Subcategory;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JuasoonlineSubcategoryRepository implements JuasoonlineSubcategoryRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return JsonResponse
     */
    public function getSubcategories() : JsonResponse
    {
        $Subcategory = Subcategory::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> get();
        return $this -> successResponse( SubcategoryResource::collection( $Subcategory ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse
     */
    public function getSubcategory( Subcategory $subcategory ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $subcategory -> load( $this -> relationships ); }
        return $this -> successResponse( new SubcategoryResource( $subcategory ), "Success", null, Response::HTTP_OK );
    }
}
