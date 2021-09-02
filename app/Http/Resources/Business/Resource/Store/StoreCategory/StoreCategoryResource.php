<?php

namespace App\Http\Resources\Business\Resource\Store\StoreCategory;

use App\Http\Resources\Business\Resource\Store\StoreSubcategory\StoreSubcategoryResource;
use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class StoreCategoryResource extends JsonResource
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
            'type'                  => 'StoreCategory',

            'attributes'            =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'name'              => $this -> resource -> name,
                'slug'              => $this -> resource -> slug,
                'description'       => $this -> resource -> description,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'store' ) || $this -> relationLoaded( 'subcategories' ),
            [
                'store'             => new StoreResource( $this -> whenLoaded( 'store' ) ),
                'subcategories'     => StoreSubcategoryResource::collection( $this -> whenLoaded('subcategories')),
            ])
        ];
    }
}
