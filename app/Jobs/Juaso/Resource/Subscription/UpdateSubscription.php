<?php

namespace App\Jobs\Juaso\Resource\Subscription;

use App\Http\Requests\Juaso\Resource\VendorSubscription\VendorSubscriptionRequest;
use App\Models\Juaso\Subscription\Subscription;
use App\Http\Resources\Juaso\Country\CountryResource;
use App\Http\Resources\Juaso\Resource\Subscription\SubscriptionResource;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateSubscription implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private VendorSubscriptionRequest $theRequest; private Subscription $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(VendorSubscriptionRequest $vendorSubscriptionRequest, Subscription $vendorSubscription )
    {
        $this -> theRequest     = $vendorSubscriptionRequest;
        $this -> theModel       = $vendorSubscription;
    }

    /**
     * Execute the job.
     *
     * @return CountryResource|mixed
     */
    public function handle() : CountryResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new SubscriptionResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
