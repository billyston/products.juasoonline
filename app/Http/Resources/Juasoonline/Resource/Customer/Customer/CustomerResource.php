<?php

namespace App\Http\Resources\Juasoonline\Resource\Customer\Customer;

use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
use App\Http\Resources\Juasoonline\Resource\Customer\Wishlist\WishlistResource;
use App\Http\Resources\Juasoonline\Resource\Customer\Address\AddressResource;
use App\Http\Resources\Juasoonline\Resource\Customer\Cart\CartResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|mixed
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                    => $this -> resource -> id,
            'type'                  => 'Customer',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'first_name'        => $this -> resource -> first_name,
                'middle_name'       => $this -> resource -> middle_name,
                'last_name'         => $this -> resource -> last_name,

                'gender'            => $this -> resource -> gender,
                'date_of_birth'     => $this -> resource -> date_of_birth,
                'image'             => $this -> resource -> image,

                'email'             => $this -> resource -> email,
                'mobile_phone'      => $this -> resource -> mobile_phone,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'addresses' ) || $this -> relationLoaded( 'wishlists' ) || $this -> relationLoaded( 'carts' ) || $this -> relationLoaded( 'stores' ),
            [
                'addresses'         => AddressResource::collection( $this -> whenLoaded( 'addresses' ) ),
                'wishlists'         => WishlistResource::collection( $this -> whenLoaded( 'wishlists' ) ),
                'carts'             => CartResource::collection( $this -> whenLoaded( 'carts' ) ),
                'stores'            => StoreResource::collection( $this -> whenLoaded( 'stores' ) ),
            ])
        ];
    }
}
