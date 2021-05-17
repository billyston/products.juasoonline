<?php

namespace App\Http\Resources\Others\PromoType;

use App\Http\Resources\Product\Promotion\PromotionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class PromoTypeResource extends JsonResource
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
            'id' => $this -> resource -> id,
            'types' => 'PromoType',
            'attributes' =>
            [
                'resource_id' => $this -> resource -> resource_id,
                'name' => $this -> resource -> name,
                'fee' => number_format( $this -> resource -> fee, 2 ),
                'description' => $this -> resource -> description,
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'promotions' ),
            [
                'promotions'        => PromotionResource::collection( $this -> whenLoaded('promotions') ),
            ])
        ];
    }
}
