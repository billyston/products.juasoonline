<?php

namespace App\Repositories\Others\Brand;

use App\Http\Requests\Others\Brand\BrandRequest;
use App\Http\Resources\Others\Brand\BrandResource;
use App\Jobs\Others\Brand\CreateBrand;
use App\Models\Others\Brand\Brand;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BrandRepository implements BrandRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Brand = Brand::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> paginate();
        return $this -> successResponse( BrandResource::collection( $Brand ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param BrandRequest $brandRequest
     * @return JsonResponse
     */
    public function store( BrandRequest $brandRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateBrand( $brandRequest ) ) -> handle(), "Success", "Brand created", Response::HTTP_CREATED );
    }

    /**
     * @param Brand $brand
     * @return JsonResponse
     */
    public function show( Brand $brand ) : JsonResponse
    {}

    /**
     * @param BrandRequest $brandRequest
     * @param Brand $brand
     * @return JsonResponse
     */
    public function update( BrandRequest $brandRequest, Brand $brand ) : JsonResponse
    {}

    /**
     * @param Brand $brand
     * @return JsonResponse
     */
    public function destroy(Brand $brand ) : JsonResponse
    {}
}
