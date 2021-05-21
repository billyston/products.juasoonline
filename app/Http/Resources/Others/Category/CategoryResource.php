<?php

namespace App\Http\Resources\Others\Category;

use App\Http\Resources\Others\Group\GroupResource;
use App\Http\Resources\Others\Subcategory\SubcategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class CategoryResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array|mixed
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                    => $this -> resource -> id,
            'type'                  => 'Category',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'name'              => $this -> resource -> name,
                'slug'              => $this -> resource -> slug,
                'description'       => $this -> resource -> description,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'group' ) || $this -> relationLoaded( 'subcategory' ),
            [
                'group'             => new GroupResource( $this -> whenLoaded( 'group' ) ),
                'subcategory'       => SubcategoryResource::collection( $this -> whenLoaded('subcategory') ),
            ])
        ];
    }
}
