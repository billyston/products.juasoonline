<?php

namespace App\Http\Resources\Juasoonline\Resource\Customer\Wishlist;

use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use App\Models\Business\Product\Product\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class WishlistResource extends JsonResource
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
            'type'                  => 'Wishlist',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,
                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
            ],
            'product'               => new ProductResource( Product::find( $this -> resource -> product_id ))
        ];
    }
}
