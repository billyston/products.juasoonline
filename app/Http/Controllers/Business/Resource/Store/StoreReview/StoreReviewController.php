<?php

namespace App\Http\Controllers\Business\Resource\Store\StoreReview;

use App\Repositories\Business\Resource\Store\StoreReview\StoreReviewRepositoryInterface;
use App\Http\Requests\Business\Resource\Store\StoreReview\StoreReviewRequest;
use App\Models\Business\Store\StoreReview\StoreReview;
use App\Models\Business\Store\Store\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class StoreReviewController extends Controller
{
    private StoreReviewRepositoryInterface $theRepository;

    /**
     * StoreReviewController constructor.
     * @param StoreReviewRepositoryInterface $reviewRepository
     */
    public function __construct( StoreReviewRepositoryInterface $reviewRepository )
    {
        $this -> theRepository = $reviewRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> index( $store );
    }

    /**
     * Display the specified resource.
     *
     * @param Store $store
     * @param StoreReview $review
     * @return JsonResponse
     */
    public function show( Store $store, StoreReview $review ) : JsonResponse
    {
        return $this -> theRepository -> show( $store, $review );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @param StoreReviewRequest $reviewRequest
     * @param StoreReview $review
     * @return JsonResponse
     */
    public function update( Store $store, StoreReviewRequest $reviewRequest, StoreReview $review ) : JsonResponse
    {
        return $this -> theRepository -> update( $store, $reviewRequest, $review );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function getStats( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> getStats( $store );
    }
}
