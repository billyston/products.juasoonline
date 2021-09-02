<?php

namespace App\Repositories\Business\Resource\Store\StoreReview;

use App\Http\Requests\Business\Resource\Store\StoreReview\StoreReviewRequest;
use App\Http\Resources\Business\Resource\Store\StoreReview\StoreReviewResource;
use App\Http\Resources\Business\Resource\Store\StoreReview\StoreReviewStatsResource;
use App\Jobs\Business\Resource\Store\StoreReview\UpdateStoreReview;
use App\Models\Business\Store\StoreReview\StoreReview;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class StoreReviewRepository implements StoreReviewRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * Display a listing of the resource.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        $Review = StoreReview::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( StoreReviewResource::collection( $Review ), "Success", null, Response::HTTP_OK );
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
        checkResourceRelation( $store -> reviews() -> where( 'store_reviews.id', $review -> id ) -> count());
        if ( $this -> loadRelationships() ) { $review -> load( $this -> relationships ); }
        return $this -> successResponse( new StoreReviewResource( $review ), "Success", null, Response::HTTP_OK );
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
        checkResourceRelation( $store -> reviews() -> where( 'store_reviews.id', $review -> id ) -> count());
        if ( $this -> loadRelationships() ) { $review -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateStoreReview( $reviewRequest, $review ) ) -> handle(), 'Success', 'Review updated', Response::HTTP_OK );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function getStats( Store $store ) : JsonResponse
    {
        $review = getStoreReview( $store );
        return $this -> successResponse( new StoreReviewStatsResource( $review ), 'Success', null, Response::HTTP_OK );
    }
}
