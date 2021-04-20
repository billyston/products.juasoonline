<?php

namespace App\Repositories\Product\Review;

use App\Http\Requests\Product\Review\ReviewRequest;
use App\Http\Resources\Product\Review\ReviewResource;
use App\Jobs\Product\Review\CreateReview;
use App\Jobs\Product\Review\UpdateReview;
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
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Review = Review::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( ReviewResource::collection( $Review ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ReviewRequest $reviewRequest
     * @return JsonResponse
     */
    public function store( ReviewRequest $reviewRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateReview( $reviewRequest ) ) -> handle(), "Success", "Review created", Response::HTTP_CREATED );
    }

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function show( Review $review ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $review -> load( $this -> relationships ); }
        return $this -> successResponse( new ReviewResource( $review ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     * @return JsonResponse
     */
    public function update( ReviewRequest $reviewRequest, Review $review ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $review -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateReview( $reviewRequest, $review ) ) -> handle(), 'Success', 'Review updated', Response::HTTP_OK );
    }

    /**
     * @param Review $review
     * @return JsonResponse|void
     */
    public function destroy( Review $review ) : JsonResponse
    {
        try
        {
            $review -> delete();
            return $this -> successResponse( null, 'Success', 'Review deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
