<?php

namespace App\Repositories\Business\Juaso\Brand;

use App\Http\Resources\Juaso\Brand\BrandResource;
use App\Models\Juaso\Brand\Brand;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JuasoBrandRepository implements JuasoBrandRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Brand = Brand::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> get();
        return $this -> successResponse( BrandResource::collection( $Brand ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Brand $brand
     * @return JsonResponse
     */
    public function show( Brand $brand ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $brand -> load( $this -> relationships ); }
        return $this -> successResponse( new BrandResource( $brand ), "Success", null, Response::HTTP_OK );
    }
}
