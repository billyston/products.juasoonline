<?php

namespace App\Repositories\Product\Review;

use App\Http\Requests\Product\Review\ReviewRequest;
use App\Models\Product\Review\Review;
use Illuminate\Http\JsonResponse;

interface ReviewRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param ReviewRequest $reviewRequest
     * @return JsonResponse
     */
    public function store( ReviewRequest $reviewRequest ) : JsonResponse;

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function show( Review $review ) : JsonResponse;

    /**
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     * @return JsonResponse
     */
    public function update( ReviewRequest $reviewRequest, Review $review ) : JsonResponse;

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function destroy( Review $review ) : JsonResponse;
}
