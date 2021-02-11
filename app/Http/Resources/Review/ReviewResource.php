<?php

namespace App\Http\Resources\Review;

use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray( $request ): array
    {
        return
        [
            'id'                    => $this -> id,
            'type'                  => 'Review',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'rating'            => $this -> rating,
                'review'            => $this -> review,
                'customer_id'       => $this -> customer_id,
                'status'            => $this -> status,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'product' ),
            [
                'product'           => new ProductResource( $this -> whenLoaded( 'product' ) ),
            ])
        ];
    }
}
