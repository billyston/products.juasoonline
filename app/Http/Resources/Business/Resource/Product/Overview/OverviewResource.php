<?php

namespace App\Http\Resources\Business\Resource\Product\Overview;

use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string)
 */
class OverviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @param  Request  $request
     * @return array|mixed
     */
    public function toArray( $request ): array
    {
        return
        [
            'id'                    => $this -> resource -> id,
            'type'                  => 'Overview',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'title'             => $this -> resource -> title,
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
