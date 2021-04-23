<?php

namespace App\Http\Controllers\Product\Review;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Review\ReviewRequest;
use App\Models\Product\Product;
use App\Models\Product\Review\Review;
use App\Repositories\Product\Review\ReviewRepositoryInterface;
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
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param ReviewRequest $reviewRequest
     * @return JsonResponse
     */
    public function store( Product $product, ReviewRequest $reviewRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $reviewRequest );
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

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Review $review
     * @return JsonResponse
     */
    public function destroy( Product $product, Review $review ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $review );
    }
}
