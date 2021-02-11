<?php

namespace App\Http\Resources\Overview;

use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class OverviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
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

                'title'             => $this -> title,
                'overview'          => $this -> overview,
                'file_path'         => $this -> file_path,

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
