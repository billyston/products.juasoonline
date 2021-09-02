<?php

namespace App\Jobs\Business\Resource\Product\Review;

use App\Http\Requests\Business\Resource\Product\Review\ReviewRequest;
use App\Http\Resources\Business\Resource\Product\Review\ReviewResource;
use App\Models\Business\Product\Review\Review;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class UpdateReview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private ReviewRequest $theRequest; private Review $theModel;

    /**
     * UpdateStoreReview constructor.
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     */
    public function __construct( ReviewRequest $reviewRequest, Review $review )
    {
        $this -> theRequest     = $reviewRequest;
        $this -> theModel       = $review;
    }

    /**
     * @return ReviewResource|mixed
     */
    public function handle() : ReviewResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new ReviewResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
