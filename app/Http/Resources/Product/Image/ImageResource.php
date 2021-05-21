<?php

namespace App\Http\Resources\Product\Image;

use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class ImageResource extends JsonResource
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
            'type'                  => 'Images',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'description'       => $this -> resource -> description,
                'image'             => $this -> resource -> image,

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
