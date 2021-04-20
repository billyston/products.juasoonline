<?php

namespace App\Http\Resources\Others\Category;

use App\Http\Resources\Others\Group\GroupResource;
use App\Http\Resources\Others\Subcategory\SubcategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class CategoryResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray( $request )
    {
        return
        [
            'id'                    => $this -> id,
            'type'                  => 'Category',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'name'              => $this -> name,
                'slug'              => $this -> slug,
                'description'       => $this -> description,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'group' ) || $this -> relationLoaded( 'subcategory' ),
            [
                'group'             => new GroupResource( $this -> whenLoaded( 'group' ) ),
                'subcategory'       => SubcategoryResource::collection( $this -> whenLoaded('subcategory') ),
            ])
        ];
    }
}
