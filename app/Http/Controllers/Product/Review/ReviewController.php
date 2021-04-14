<?php

namespace App\Http\Controllers\Product\Review;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Review\ReviewRequest;
use App\Models\Product\Review\Review;
use App\Repositories\Product\Review\ReviewRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ReviewController extends Controller
{
    private $theRepository;

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
     * @return \Illuminate\Http\Response
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ReviewRequest $reviewRequest
     * @return \Illuminate\Http\Response
     */
    public function store( ReviewRequest $reviewRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $reviewRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Review $review
     * @return JsonResponse
     */
    public function show( Review $review ) : JsonResponse
    {
        return $this -> theRepository -> show( $review );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     * @return JsonResponse
     */
    public function update( ReviewRequest $reviewRequest, Review $review ) : JsonResponse
    {
        return $this -> theRepository -> update( $reviewRequest, $review );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Review $review
     * @return JsonResponse
     */
    public function destroy( Review $review ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $review );
    }
}
