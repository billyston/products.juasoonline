<?php

namespace App\Http\Resources\Product\Overview;

use App\Http\Resources\Product\ProductResource;
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
            'id'                    => $this -> id,
            'type'                  => 'Review',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'title'             => $this -> title,
                'description'       => $this -> description,
                'file'             => $this -> file,

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
