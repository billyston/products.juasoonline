<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Others\Brand\BrandResource;
use App\Http\Resources\Product\Overview\OverviewResource;
use App\Http\Resources\Product\Image\ImageResource;
use App\Http\Resources\Product\Promotion\PromotionResource;
use App\Http\Resources\Product\Review\ReviewResource;
use App\Http\Resources\Product\Size\SizeResource;
use App\Http\Resources\Product\Specification\SpecificationResource;
use App\Http\Resources\Product\Color\ColorResource;
use App\Http\Resources\Others\Subcategory\SubcategoryResource;
use App\Http\Resources\Store\Charge\ChargeResource;
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
            'id'                    => $this -> resource -> id,
            'type'                  => 'Product',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'name'              => $this -> resource -> name,
                'sku'               => $this -> resource -> sku,
                'slug'              => $this -> resource -> slug,
                'description'       => $this -> resource -> description,
                'price'             => $this -> resource -> price,
                'sales_price'       => $this -> resource -> sales_price,
                'discount'          => number_format( ( $this -> resource -> price - $this -> resource -> sales_price ) / $this -> resource -> price * 100, 2 ) . '%',
                'quantity'          => $this -> resource -> quantity,
                'status'            => $this -> resource -> status,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'brand' ) || $this -> relationLoaded( 'charge' ) || $this -> relationLoaded( 'categories' ) || $this -> relationLoaded( 'specifications' ) || $this -> relationLoaded( 'reviews' ) || $this -> relationLoaded( 'overviews' ) || $this -> relationLoaded( 'images' ) || $this -> relationLoaded( 'colors' ) || $this -> relationLoaded( 'sizes' ) || $this -> relationLoaded( 'promotions' ),
            [
                'brand'             => new BrandResource( $this -> whenLoaded('brand') ),
                'charge'            => new ChargeResource( $this -> whenLoaded('charge') ),
                'categories'        => SubcategoryResource::collection( $this -> whenLoaded('categories') ),
                'images'            => ImageResource::collection( $this -> whenLoaded('images') ),
                'specifications'    => SpecificationResource::collection( $this -> whenLoaded('specifications') ),
                'overviews'         => OverviewResource::collection( $this -> whenLoaded('overviews') ),
                'reviews'           => ReviewResource::collection( $this -> whenLoaded('reviews') ),
                'colors'            => ColorResource::collection( $this -> whenLoaded('colors') ),
                'sizes'             => SizeResource::collection( $this -> whenLoaded('sizes') ),
                'promotions'        => PromotionResource::collection( $this -> whenLoaded('promotions') ),
            ])
        ];
    }
}
