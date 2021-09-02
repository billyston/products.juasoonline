<?php

namespace App\Jobs\Business\Resource\Store\StoreReview;

use App\Http\Requests\Business\Resource\Store\StoreReview\StoreReviewRequest;
use App\Http\Resources\Business\Resource\Store\StoreReview\StoreReviewResource;
use App\Models\Business\Store\Store\Store;
use App\Models\Business\Store\StoreReview\StoreReview;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Traits\apiResponseBuilder;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateStoreReview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private Customer $theCustomer; private Store $theStore; private StoreReviewRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @param Customer $customer
     * @param Store $store
     * @param StoreReviewRequest $storeReviewRequest
     */
    public function __construct( Customer $customer, Store $store, StoreReviewRequest $storeReviewRequest )
    {
        $this -> theCustomer = $customer;
        $this -> theStore = $store;
        $this -> theRequest = $storeReviewRequest;
    }

    /**
     * Execute the job.
     *
     * @return StoreReviewResource|mixed
     */
    public function handle(): StoreReviewResource
    {
        try
        {
            $Review = new StoreReview( $this -> theRequest -> input( 'data.attributes' ) );
            $Review -> store() -> associate( $this -> theStore -> id );
            $Review -> customer() -> associate( $this -> theCustomer -> id );
            $Review -> save();

            $Review -> refresh();
            return ( new StoreReviewResource( $Review ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
