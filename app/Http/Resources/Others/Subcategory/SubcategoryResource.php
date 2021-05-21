<?php

namespace App\Http\Resources\Others\Subcategory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class SubcategoryResource extends JsonResource
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
            'type'                  => 'Subcategory',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'name'              => $this -> resource -> name,
                'slug'              => $this -> resource -> slug,
                'description'       => $this -> resource -> description,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'category' ),
            [
                'category'             => new SubcategoryResource( $this -> whenLoaded( 'category' ) ),
            ])
        ];
    }
}
