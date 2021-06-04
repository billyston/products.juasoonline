<?php

namespace App\Http\Resources\Juasoonline;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromotionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                            => $this -> resource -> id,
            'type'                          => 'Promotion',

            'attributes' =>
            [
                'resource_id'               => $this -> resource -> resource_id,

                'promo_start'               => $this -> resource -> promo_start -> toDayDateTimeString(),
                'promo_end'                 => $this -> resource -> promo_end -> toDayDateTimeString()(),
                'status'                    => $this -> resource -> status,

                'product_id'                => $this -> resource -> product -> resource_id,
                'price'                     => number_format( $this -> resource -> product -> price, 2 ),
                'sales_price'               => number_format( $this -> resource -> product -> sales_price, 2 ),
                'total_sold'                => $this -> resource -> product -> total_sold,
                'discount'                  => round(( $this -> resource -> product -> price - $this -> resource -> product -> sales_price ) / $this -> resource -> product -> price * 100, 2 ). '%',

                'image'                     => $this -> resource -> product -> images[0] -> image,

                'created_at'                => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'                => $this -> resource -> updated_at -> toDateTimeString(),
            ]
        ];
    }
}
