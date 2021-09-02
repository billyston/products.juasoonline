<?php

namespace App\Repositories\Business\Resource\Store\StoreReview;

use App\Http\Requests\Business\Resource\Store\StoreReview\StoreReviewRequest;
use App\Models\Business\Store\StoreReview\StoreReview;
use App\Models\Business\Store\Store\Store;
use Illuminate\Http\JsonResponse;

interface StoreReviewRepositoryInterface
{
    /**
     * Display a listing of the resource.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse;

    /**
     * Display the specified resource.
     *
     * @param Store $store
     * @param StoreReview $review
     * @return JsonResponse
     */
    public function show( Store $store, StoreReview $review ) : JsonResponse;

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @param StoreReviewRequest $reviewRequest
     * @param StoreReview $review
     * @return JsonResponse
     */
    public function update( Store $store, StoreReviewRequest $reviewRequest, StoreReview $review ) : JsonResponse;

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function getStats( Store $store ) : JsonResponse;
}
