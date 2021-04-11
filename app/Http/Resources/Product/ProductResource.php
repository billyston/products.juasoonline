<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Product\Overview\OverviewResource;
use App\Http\Resources\Product\Image\ImageResource;
use App\Http\Resources\Product\Review\ReviewResource;
use App\Http\Resources\Product\Specification\SpecificationResource;
use App\Http\Resources\Subcategory\SubcategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class ProductResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                    => $this -> id,
            'type'                  => 'Product',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'name'              => $this -> name,
                'sku'               => $this -> sku,
                'slug'              => $this -> slug,
                'description'       => $this -> description,
                'price'             => $this -> price,
                'sales_price'       => $this -> sales_price,
                'quantity'          => $this -> quantity,
                'status'            => $this -> status,

                'promo_start'       => $this -> promo_start,
                'promo_end'         => $this -> promo_end,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'categories' ) || $this -> relationLoaded( 'specifications' ) || $this -> relationLoaded( 'reviews' ) || $this -> relationLoaded( 'overviews' ) || $this -> relationLoaded( 'images' ),
            [
                'categories'        => SubcategoryResource::collection( $this -> whenLoaded('categories') ),
                'images'            => ImageResource::collection( $this -> whenLoaded('images') ),
                'specifications'    => SpecificationResource::collection( $this -> whenLoaded('specifications') ),
                'overviews'         => OverviewResource::collection( $this -> whenLoaded('overviews') ),
                'reviews'           => ReviewResource::collection( $this -> whenLoaded('reviews') ),
            ])
        ];
    }
}
