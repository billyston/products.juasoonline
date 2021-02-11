<?php

namespace App\Repositories\Review;

use App\Http\Requests\Review\ReviewRequest;
use App\Models\Review\Review;
use Illuminate\Http\JsonResponse;

interface ReviewRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param ReviewRequest $request
     * @return JsonResponse
     */
    public function store( ReviewRequest $request ) : JsonResponse;

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function show( Review $review ) : JsonResponse;

    /**
     * @param ReviewRequest $request
     * @param Review $review
     * @return JsonResponse
     */
    public function update( ReviewRequest $request, Review $review ) : JsonResponse;

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function destroy( Review $review ) : JsonResponse;
}
