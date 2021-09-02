<?php

namespace App\Jobs\Juasoonline\Resource\Customer\Wishlist;

use App\Http\Requests\Juasoonline\Resource\Customer\Wishlist\WishlistRequest;
use App\Http\Resources\Juasoonline\Resource\Customer\Wishlist\WishlistResource;
use App\Models\Juasoonline\Customer\Customer\Customer;
use App\Models\Juasoonline\Customer\Wishlist\Wishlist;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class CreateWishlist implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private Customer $theCustomer; private WishlistRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( Customer $customers, WishlistRequest $wishlistRequest )
    {
        $this -> theCustomer = $customers;
        $this -> theRequest = $wishlistRequest;
    }

    /**
     * Execute the job.
     *
     * @return WishlistResource|mixed
     */
    public function handle() : WishlistResource
    {
        try
        {
            $Wishlist = new Wishlist();
            $Wishlist -> customer_id = $this -> theRequest [ 'data.relationships.customer.customer_id' ];
            $Wishlist -> product_id = $this -> theRequest [ 'data.relationships.product.product_id' ];

            $Wishlist -> save();

            $Wishlist -> refresh();
            return ( new WishlistResource( $Wishlist ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
