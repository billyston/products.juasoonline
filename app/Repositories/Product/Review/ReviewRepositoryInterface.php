<?php

namespace App\Repositories\Product\Review;

use App\Http\Requests\Product\Review\ReviewRequest;
use App\Models\Product\Product;
use App\Models\Product\Review\Review;
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
     * @param ReviewRequest $reviewRequest
     * @return JsonResponse
     */
    public function store( Product $product, ReviewRequest $reviewRequest ) : JsonResponse;

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

    /**
     * @param Product $product
     * @param Review $review
     * @return JsonResponse
     */
    public function destroy( Product $product, Review $review ) : JsonResponse;
}
