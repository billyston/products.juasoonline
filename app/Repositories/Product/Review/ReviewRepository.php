<?php

namespace App\Repositories\Product\Review;

use App\Http\Requests\Product\Review\ReviewRequest;
use App\Http\Resources\Product\Review\ReviewResource;
use App\Jobs\Product\Review\CreateReview;
use App\Jobs\Product\Review\UpdateReview;
use App\Models\Product\Product;
use App\Models\Product\Review\Review;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Exception;

class ReviewRepository implements ReviewRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        $Review = Review::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( ReviewResource::collection( $Review ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param ReviewRequest $reviewRequest
     * @return JsonResponse
     */
    public function store( Product $product, ReviewRequest $reviewRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateReview( $reviewRequest ) ) -> handle(), "Success", "Review created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Review $review
     * @return JsonResponse
     */
    public function show( Product $product, Review $review ) : JsonResponse
    {
        checkResourceRelation( $product -> reviews() -> where( 'reviews.id', $review -> id ) -> count());
        if ( $this -> loadRelationships() ) { $review -> load( $this -> relationships ); }
        return $this -> successResponse( new ReviewResource( $review ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     * @return JsonResponse
     */
    public function update( Product $product, ReviewRequest $reviewRequest, Review $review ) : JsonResponse
    {
        checkResourceRelation( $product -> reviews() -> where( 'reviews.id', $review -> id ) -> count());
        if ( $this -> loadRelationships() ) { $review -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateReview( $reviewRequest, $review ) ) -> handle(), 'Success', 'Review updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Review $review
     * @return JsonResponse|void
     */
    public function destroy( Product $product, Review $review ) : JsonResponse
    {
        checkResourceRelation( $product -> reviews() -> where( 'reviews.id', $review -> id ) -> count());
        $review -> delete();
        return $this -> successResponse( null, 'Success', 'Review deleted.', Response::HTTP_NO_CONTENT );
    }
}
