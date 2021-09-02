<?php

namespace App\Jobs\Business\Resource\Store\StoreReview;

use App\Http\Requests\Business\Resource\Store\StoreReview\StoreReviewRequest;
use App\Http\Resources\Business\Resource\Store\StoreReview\StoreReviewResource;
use App\Models\Business\Store\StoreReview\StoreReview;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateStoreReview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private StoreReviewRequest $theRequest; private StoreReview $theModel;

    /**
     * UpdateStoreReview constructor.
     * @param StoreReviewRequest $storeReviewRequest
     * @param StoreReview $storeReview
     */
    public function __construct( StoreReviewRequest $storeReviewRequest, StoreReview $storeReview )
    {
        $this -> theRequest     = $storeReviewRequest;
        $this -> theModel       = $storeReview;
    }

    /**
     * @return StoreReviewResource|mixed
     */
    public function handle() : StoreReviewResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new StoreReviewResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
