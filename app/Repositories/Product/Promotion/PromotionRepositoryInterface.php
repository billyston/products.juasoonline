<?php

namespace App\Repositories\Product\Promotion;

use App\Http\Requests\Product\Promotion\PromotionRequest;
use App\Models\Product\Product;
use App\Models\Product\Promotion\Promotion;
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
