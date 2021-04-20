<?php

namespace App\Repositories\Product\Image;

use App\Http\Requests\Product\Image\ImageRequest;
use App\Models\Product\Image\Image;
use App\Models\Product\Product;
use Illuminate\Http\JsonResponse;

interface ImageRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param ImageRequest $imageRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( ImageRequest $imageRequest, Product $product ) : JsonResponse;

    /**
     * @param Image $image
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Image $image, Product $product ) : JsonResponse;

    /**
     * @param ImageRequest $imageRequest
     * @param Image $image
     * @return JsonResponse
     */
    public function update( ImageRequest $imageRequest, Image $image ) : JsonResponse;

    /**
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy( Image $image ) : JsonResponse;
}
