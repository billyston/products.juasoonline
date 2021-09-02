<?php

namespace App\Repositories\Business\Resource\Product\Review;

use App\Http\Requests\Business\Resource\Product\Review\ReviewRequest;
use App\Http\Resources\Business\Resource\Product\Review\ReviewResource;
use App\Jobs\Business\Resource\Product\Review\UpdateReview;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Review\Review;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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
        return $this -> successResponse( ( new UpdateReview( $reviewRequest, $review ) ) -> handle(), 'Success', 'StoreReview updated', Response::HTTP_OK );
    }
}
