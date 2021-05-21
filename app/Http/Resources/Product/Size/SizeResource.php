<?php

namespace App\Http\Resources\Product\Size;

use App\Http\Resources\Product\ProductResource;
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
            'id'                    => $this -> resource -> id,
            'type'                  => 'Size',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'size'              => $this -> resource -> size,
                'description'       => $this -> resource -> description,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'product' ),
            [
                'product'           => new ProductResource( $this -> whenLoaded( 'product' ) ),
            ])
        ];
    }
}
