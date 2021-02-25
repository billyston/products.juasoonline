<?php

namespace App\Repositories\ProductImage;

use App\Http\Requests\ProductImage\ProductImageRequest;
use App\Models\ProductImage\ProductImage;
use Illuminate\Http\JsonResponse;

interface ProductImageRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param ProductImageRequest $productImageRequest
     * @return JsonResponse
     */
    public function store( ProductImageRequest $productImageRequest ) : JsonResponse;

    /**
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function show( ProductImage $productImage ) : JsonResponse;

    /**
     * @param ProductImageRequest $productImageRequest
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function update( ProductImageRequest $productImageRequest, ProductImage $productImage ) : JsonResponse;

    /**
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function destroy( ProductImage $productImage ) : JsonResponse;
}
