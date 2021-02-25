<?php

namespace App\Repositories\ProductImage;

use App\Http\Requests\ProductImage\ProductImageRequest;
use App\Jobs\ProductImage\CreateProductImage;
use App\Models\ProductImage\ProductImage;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductImageRepository implements ProductImageRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {

    }

    /**
     * @param ProductImageRequest $productImageRequest
     * @return JsonResponse
     */
    public function store( ProductImageRequest $productImageRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateProductImage( $productImageRequest ) ) -> handle(), "Success", "Image(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function show( ProductImage $productImage ) : JsonResponse
    {}

    /**
     * @param ProductImageRequest $productImageRequest
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function update( ProductImageRequest $productImageRequest, ProductImage $productImage ) : JsonResponse
    {}

    /**
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function destroy( ProductImage $productImage ) : JsonResponse
    {}
}
