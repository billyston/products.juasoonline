<?php

namespace App\Jobs\Product\Review;

use App\Http\Requests\Review\ReviewRequest;
use App\Http\Resources\Review\ReviewResource;
use App\Models\Review\Review;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\JsonResponse;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateReview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $theRequest; private $theModel;

    /**
     * UpdateReview constructor.
     * @param ReviewRequest $reviewRequest
     * @param Review $review
     */
    public function __construct( ReviewRequest $reviewRequest, Review $review )
    {
        $this -> theRequest     = $reviewRequest;
        $this -> theModel       = $review;
    }

    /**
     * @return ReviewResource
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
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
