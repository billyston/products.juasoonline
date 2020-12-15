<?php

namespace App\Http\Resources\Group;

use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class GroupResource extends JsonResource
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
            'type'                  => 'Group',

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
                'category'          => CategoryResource::collection( $this -> whenLoaded('category') ),
            ])
        ];
    }
}
