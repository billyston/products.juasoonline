<?php

namespace App\Http\Resources\Others\Brand;

use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request $request
     * @return array|mixed
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                    => $this -> id,
            'type'                  => 'Brand',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'name'              => $this -> name,
                'description'       => $this -> description,
                'logo'              => $this -> logo,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'products' ),
            [
                'subcategory'       => ProductResource::collection( $this -> whenLoaded('products') ),
            ])
        ];
    }
}
