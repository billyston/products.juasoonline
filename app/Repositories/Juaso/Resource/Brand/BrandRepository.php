<?php

namespace App\Repositories\Juaso\Resource\Brand;

use App\Http\Requests\Juaso\Resource\Brand\BrandRequest;
use App\Http\Resources\Juaso\Resource\Brand\BrandResource;
use App\Jobs\Juaso\Resource\Brand\CreateBrand;
use App\Jobs\Juaso\Resource\Brand\UpdateBrand;
use App\Models\Juaso\Brand\Brand;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BrandRepository implements BrandRepositoryInterface
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
    {
        if ( $this -> loadRelationships() ) { $brand -> load( $this -> relationships ); }
        return $this -> successResponse( new BrandResource( $brand ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param BrandRequest $brandRequest
     * @param Brand $brand
     * @return JsonResponse
     */
    public function update( BrandRequest $brandRequest, Brand $brand ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateBrand( $brandRequest, $brand ) ) -> handle(), 'Success', 'Brand updated', Response::HTTP_OK );
    }

    /**
     * @param Brand $brand
     * @return JsonResponse
     */
    public function destroy(Brand $brand ) : JsonResponse
    {
        $brand -> delete();
        return $this -> successResponse( null, 'Success', 'Brand deleted', Response::HTTP_NO_CONTENT );
    }
}
