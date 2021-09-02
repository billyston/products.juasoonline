<?php

namespace App\Http\Controllers\Business\Resource\Product\Review;

use App\Repositories\Business\Resource\Product\Review\ReviewRepositoryInterface;
use App\Http\Requests\Business\Resource\Product\Review\ReviewRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Review\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ReviewController extends Controller
{
    private ReviewRepositoryInterface $theRepository;

    /**
     * BranchController constructor.
     * @param ReviewRepositoryInterface $reviewRepository
     */
    public function __construct( ReviewRepositoryInterface $reviewRepository )
    {
        $this -> theRepository = $reviewRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> index( $product );
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @param Review $review
     * @return JsonResponse
     */
    public function show( Product $product, Review $review ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $review );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     * @return JsonResponse
     */
    public function update( Product $product, ReviewRequest $reviewRequest, Review $review ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $reviewRequest, $review );
    }
}
