<?php

namespace App\Http\Resources\Juasoonline\Resource\Customer\Cart;

use App\Http\Resources\Business\Resource\Product\Bundle\BundleResource;
use App\Http\Resources\Business\Resource\Product\Color\ColorResource;
use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use App\Http\Resources\Business\Resource\Product\Size\SizeResource;
use App\Http\Resources\Business\Resource\Store\Store\StoreResource;

use App\Models\Business\Store\Store\Store;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Color\Color;
use App\Models\Business\Product\Size\Size;
use App\Models\Business\Product\Bundle\Bundle;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class CartResource extends JsonResource
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
            'type'                  => 'Cart',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,
                'quantity'          => $this -> resource -> quantity,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
            ],

            'store'                 => new StoreResource( Store::find( $this -> resource -> store_id )),
            'product'               => new ProductResource( Product::find( $this -> resource -> product_id )),
            'color'                 => new ColorResource( Color::find( $this -> resource -> color_id )),
            'size'                  => new SizeResource( Size::find( $this -> resource -> size_id )),
            'bundle'                => new BundleResource( Bundle::find( $this -> resource -> bundle_id ) )
        ];
    }
}
