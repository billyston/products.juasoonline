<?php

namespace App\Http\Resources\Business\Resource\Product\Size;

use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class SizeResource extends JsonResource
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
            'id'                            => $this -> resource -> id,
            'type'                          => 'Size',

            'attributes'                    =>
            [
                'resource_id'               => $this -> resource -> resource_id,

                'size'                      => $this -> resource -> size,
                'description'               => $this -> resource -> description,

                'raw_price'                 => $this -> when($this -> resource -> currentProduct -> price_group === "Size", $this -> resource -> price ),
                'raw_sales_price'           => $this -> when($this -> resource -> currentProduct -> price_group === "Size", $this -> resource -> sales_price ),

                'price'                     => $this -> when($this -> resource -> currentProduct -> price_group === "Size", number_format( $this -> resource -> price, 2 ) ),
                'sales_price'               => $this -> when($this -> resource -> currentProduct -> price_group === "Size", number_format( $this -> resource -> sales_price, 2 ) ),

                'discount_amount'           => $this -> when($this -> resource -> currentProduct -> price_group === "Size", round(( $this -> resource -> price - $this -> resource -> sales_price ), 2 ) ),
                'discount_percentage'       => $this -> when($this -> resource -> currentProduct -> price_group === "Size", ( $this -> resource -> price - $this -> resource -> sales_price ) / 100 . "%" ),

                'quantity'                  => $this -> resource -> quantity,
                'total_sold'                => $this -> resource -> total_sold,

                'created_at'                => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'                => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'                       => $this -> when( $this -> relationLoaded( 'product' ),
            [
                'product'                   => new ProductResource( $this -> whenLoaded( 'product' ) ),
            ])
        ];
    }
}
