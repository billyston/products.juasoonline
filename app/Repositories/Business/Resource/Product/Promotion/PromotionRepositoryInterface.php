<?php

namespace App\Repositories\Business\Resource\Product\Promotion;

use App\Http\Requests\Business\Resource\Product\Promotion\PromotionRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Promotion\Promotion;

use Illuminate\Http\JsonResponse;

interface PromotionRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @param PromotionRequest $promotionRequest
     * @return JsonResponse
     */
    public function store( Product $product, PromotionRequest $promotionRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function show( Product $product, Promotion $promotion ) : JsonResponse;

    /**
     * @param Product $product
     * @param PromotionRequest $promotionRequest
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function update( Product $product, PromotionRequest $promotionRequest, Promotion $promotion ) : JsonResponse;

    /**
     * @param Product $product
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function destroy( Product $product, Promotion $promotion ) : JsonResponse;
}
