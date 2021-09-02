<?php

namespace App\Http\Resources\Juaso\Resource\PromoType;

use App\Http\Resources\Business\Resource\Product\Promotion\PromotionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
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
            'id'                    => $this -> resource -> id,
            'types'                 => 'PromoType',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'name'              => $this -> resource -> name,
                'fee'               => $this -> resource -> fee,
                'description'       => $this -> resource -> description,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'promotions' ),
            [
                'promotions'        => PromotionResource::collection( $this -> whenLoaded('promotions') ),
            ])
        ];
    }
}
