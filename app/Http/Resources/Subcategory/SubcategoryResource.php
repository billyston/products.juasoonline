<?php

namespace App\Http\Resources\Subcategory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class SubcategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray( $request )
    {
        return
        [
            'id'                    => $this -> id,
            'type'                  => 'Subcategory',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'name'              => $this -> name,
                'slug'              => $this -> slug,
                'description'       => $this -> description,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'category' ),
            [
                'category'             => new SubcategoryResource( $this -> whenLoaded( 'category' ) ),
            ])
        ];
    }
}
