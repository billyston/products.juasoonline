<?php

namespace App\Repositories\Business\Resource\Product\Review;

use App\Http\Requests\Business\Resource\Product\Review\ReviewRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Review\Review;
use Illuminate\Http\JsonResponse;

interface ReviewRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @param Review $review
     * @return JsonResponse
     */
    public function show( Product $product, Review $review ) : JsonResponse;

    /**
     * @param Product $product
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     * @return JsonResponse
     */
    public function update( Product $product, ReviewRequest $reviewRequest, Review $review ) : JsonResponse;
}
