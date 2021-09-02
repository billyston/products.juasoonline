<?php

namespace App\Jobs\Juasoonline\Resource\Customer\Customer;

use App\Http\Requests\Juasoonline\Resource\Customer\Customer\CustomerRequest;
use App\Http\Resources\Juasoonline\Resource\Customer\Customer\CustomerResource;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Traits\apiResponseBuilder;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class UpdateCustomer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private CustomerRequest $theRequest; private Customer $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( CustomerRequest $customerRequest, Customer $customer )
    {
        $this -> theRequest     = $customerRequest;
        $this -> theModel       = $customer;
    }

    /**
     * Execute the job.
     *
     * @return CustomerResource|mixed
     */
    public function handle() : CustomerResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new CustomerResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ));
        }
    }
}
