<?php

namespace App\Http\Resources\Others\Group;

use App\Http\Resources\Others\Category\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class GroupResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                    => $this -> resource -> id,
            'type'                  => 'Group',

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
                'category'          => CategoryResource::collection( $this -> whenLoaded('category') ),
            ])
        ];
    }
}
