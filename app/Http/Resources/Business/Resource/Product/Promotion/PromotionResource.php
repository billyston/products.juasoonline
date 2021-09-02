<?php

namespace App\Http\Resources\Business\Resource\Product\Promotion;

use App\Http\Resources\Juaso\Resource\PromoType\PromoTypeResource;
use App\Http\Resources\Business\Resource\Product\Product\ProductResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
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
            'id'                    => $this -> resource -> id,
            'type'                  => 'Promotion',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'promo_start'       => $this -> resource -> promo_start,
                'promo_end'         => $this -> resource -> promo_end,
                'status'            => $this -> resource -> status,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'promo-type' ) || $this -> relationLoaded( 'product' ),
            [
                'promo-type'        => new PromoTypeResource( $this -> whenLoaded( 'promo-type' ) ),
                'product'           => new ProductResource( $this -> whenLoaded( 'product' ) ),
            ])
        ];
    }
}
