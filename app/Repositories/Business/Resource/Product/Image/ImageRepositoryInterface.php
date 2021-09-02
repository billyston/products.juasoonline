<?php

namespace App\Repositories\Business\Resource\Product\Image;

use App\Http\Requests\Business\Resource\Product\Image\ImageRequest;
use App\Models\Business\Product\Image\Image;
use App\Models\Business\Product\Product\Product;

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
    public function store( Product $product, ImageRequest $imageRequest ) : JsonResponse;

    /**
     * @param Image $image
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product, Image $image ) : JsonResponse;

    /**
     * @param Product $product
     * @param ImageRequest $imageRequest
     * @param Image $image
     * @return JsonResponse
     */
    public function update( Product $product, ImageRequest $imageRequest, Image $image ) : JsonResponse;

    /**
     * @param Product $product
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy( Product $product, Image $image ) : JsonResponse;
}
