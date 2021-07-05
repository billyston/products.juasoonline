<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Others\Brand\BrandResource;
use App\Http\Resources\Product\Bundle\BundleResource;
use App\Http\Resources\Product\Overview\OverviewResource;
use App\Http\Resources\Product\Image\ImageResource;
use App\Http\Resources\Product\Promotion\PromotionResource;
use App\Http\Resources\Product\Review\ReviewResource;
use App\Http\Resources\Product\Size\SizeResource;
use App\Http\Resources\Product\Specification\SpecificationResource;
use App\Http\Resources\Product\Color\ColorResource;
use App\Http\Resources\Others\Subcategory\SubcategoryResource;
use App\Http\Resources\Product\Tag\TagResource;
use App\Http\Resources\Store\Charge\ChargeResource;
use App\Http\Resources\Store\StoreResource;
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

                'raw_price'         => $this -> resource -> price,
                'raw_sales_price'   => $this -> resource -> sales_price,

                'price'             => number_format( $this -> resource -> price, 2 ),
                'sales_price'       => number_format( $this -> resource -> sales_price, 2 ),
                'discount'          => round(( $this -> resource -> price - $this -> resource -> sales_price ) / $this -> resource -> price * 100, 2 ). '%',
                'percentage_charge' => $this -> resource -> charge -> fee,
                'charge_amount'     => number_format($this -> resource -> sales_price * $this -> resource -> charge -> fee, 2),
                'quantity'          => $this -> resource -> quantity,
                'total_sold'        => $this -> resource -> total_sold,
                'status'            => $this -> resource -> status,

                'image'             => $this -> resource -> images[0] -> image,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'store' ) || $this -> relationLoaded( 'brand' ) || $this -> relationLoaded( 'charge' ) || $this -> relationLoaded( 'categories' ) || $this -> relationLoaded( 'tags' ) || $this -> relationLoaded( 'specifications' ) || $this -> relationLoaded( 'reviews' ) || $this -> relationLoaded( 'overviews' ) || $this -> relationLoaded( 'images' ) || $this -> relationLoaded( 'colors' ) || $this -> relationLoaded( 'sizes' ) || $this -> relationLoaded( 'bundles' ) || $this -> relationLoaded( 'promotions' ),
            [
                'store'             => new StoreResource( $this -> whenLoaded('store')),
                'brand'             => new BrandResource( $this -> whenLoaded('brand')),
                'charge'            => new ChargeResource( $this -> whenLoaded('charge')),
                'categories'        => SubcategoryResource::collection( $this -> whenLoaded('categories')),
                'tags'              => TagResource::collection( $this -> whenLoaded('tags')),
                'specifications'    => SpecificationResource::collection( $this -> whenLoaded('specifications')),
                'images'            => ImageResource::collection( $this -> whenLoaded('images')),
                'overviews'         => OverviewResource::collection( $this -> whenLoaded('overviews')),
                'colors'            => ColorResource::collection( $this -> whenLoaded('colors')),
                'sizes'             => SizeResource::collection( $this -> whenLoaded('sizes')),
                'bundles'           => BundleResource::collection( $this -> whenLoaded('bundles')),
                'promotions'        => PromotionResource::collection( $this -> whenLoaded('promotions')),
                'reviews'           => ReviewResource::collection( $this -> whenLoaded('reviews')),
                'review_rating'     => [ 'total' => $this -> calculate_rate( $this -> resource -> reviews -> where( 'rating', 5 ) -> count(), $this -> resource -> reviews -> where( 'rating', 4 ) -> count(), $this -> resource -> reviews -> where( 'rating', 3 ) -> count(), $this -> resource -> reviews -> where( 'rating', 2 ) -> count(), $this -> resource -> reviews -> where( 'rating', 1 ) -> count() ), 'one' => $this -> resource -> reviews -> where( 'rating', 1 ) -> count(), 'two' => $this -> resource -> reviews -> where( 'rating', 2 ) -> count(), 'three' => $this -> resource -> reviews -> where( 'rating', 3 ) -> count(), 'four' => $this -> resource -> reviews -> where( 'rating', 4 ) -> count(), 'five' => $this -> resource -> reviews -> where( 'rating', 5 ) -> count() ],
            ])
        ];
    }

    /**
     * @param $star_5
     * @param $star_4
     * @param $star_3
     * @param $star_2
     * @param $star_1
     * @return float|int
     */
    public function calculate_rate ( $star_5, $star_4, $star_3, $star_2, $star_1 )
    {
        return 5 * $star_5 + 4 * $star_4 + 3 * $star_3 + 2 * $star_4 + 1 * $star_1 === 0 ? 0 : round((5 * $star_5 + 4 * $star_4 + 3 * $star_3 + 2 * $star_2 + 1 * $star_1) / ($star_5 + $star_4 + $star_3 + $star_2 + $star_1), 2);
    }
}
