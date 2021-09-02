<?php

namespace App\Repositories\Juasoonline\Business\Product;

use App\Models\Business\Product\Product\Product;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface JuasoonlineProductsRepositoryInterface
{
    /**
     * @return AnonymousResourceCollection
     */
    public function getProducts() : AnonymousResourceCollection;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function getProduct( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function getProductRecommendations( Product $product ) : JsonResponse;
}
