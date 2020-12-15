<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Subcategory\SubcategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class ProductResource extends JsonResource
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
            'type'                  => 'Product',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'name'              => $this -> name,
                'description'       => $this -> description,
                'sales_price'       => $this -> sales_price,
                'price'             => $this -> price,
                'quantity'          => $this -> quantity,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'subcategory' ),
            [
                'subcategory'       => SubcategoryResource::collection( $this -> whenLoaded('subcategory') ),
            ])
        ];
    }
}
