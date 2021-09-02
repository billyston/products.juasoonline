<?php

namespace App\Jobs\Juasoonline\Resource\Customer\Cart;

use App\Http\Requests\Juasoonline\Resource\Customer\Cart\CartRequest;
use App\Http\Resources\Juasoonline\Resource\Customer\Cart\CartResource;
use App\Models\Juasoonline\Customer\Cart\Cart;
use App\Models\Juasoonline\Customer\Customer\Customer;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class CreateCart implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private Customer $theCustomer; private CartRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( Customer $customers, CartRequest $cartRequest )
    {
        $this -> theCustomer = $customers;
        $this -> theRequest = $cartRequest;
    }

    /**
     * Execute the job.
     *
     * @return CartResource|mixed
     */
    public function handle() : CartResource
    {
        try
        {
            $Cart = new Cart( $this -> theRequest -> input( 'data.attributes' ) );

            if ( isset( $this -> theRequest ['data.relationships.customer']) ){ $Cart -> customer_id = $this -> theRequest [ 'data.relationships.customer.customer_id' ]; }
            if ( isset( $this -> theRequest ['data.relationships.store']) ){ $Cart -> store_id = $this -> theRequest [ 'data.relationships.store.store_id' ]; }
            if ( isset( $this -> theRequest ['data.relationships.product']) ){ $Cart -> product_id = $this -> theRequest [ 'data.relationships.product.product_id' ]; }
            if ( isset( $this -> theRequest ['data.relationships.color']) ){ $Cart -> color_id = $this -> theRequest [ 'data.relationships.color.color_id' ]; }
            if ( isset( $this -> theRequest ['data.relationships.size']) ){ $Cart -> size_id = $this -> theRequest [ 'data.relationships.size.size_id' ]; }
            if ( isset( $this -> theRequest ['data.relationships.bundle']) ){ $Cart -> bundle_id = $this -> theRequest [ 'data.relationships.bundle.bundle_id' ]; }

            $Cart -> save();

            $Cart -> refresh();
            return ( new CartResource( $Cart ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
