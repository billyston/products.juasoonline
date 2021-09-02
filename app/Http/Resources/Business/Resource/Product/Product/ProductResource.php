<?php

namespace App\Http\Resources\Business\Resource\Product\Product;

use App\Http\Resources\Business\Resource\Product\Faq\FaqResource;
use App\Http\Resources\Business\Resource\Store\StoreSubcategory\StoreSubcategoryResource;
use App\Http\Resources\Juaso\Resource\Brand\BrandResource;
use App\Http\Resources\Juaso\Resource\Subcategory\SubcategoryResource;

use App\Http\Resources\Business\Resource\Store\Charge\ChargeResource;
use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
use App\Http\Resources\Business\Resource\Product\Overview\OverviewResource;
use App\Http\Resources\Business\Resource\Product\Promotion\PromotionResource;
use App\Http\Resources\Business\Resource\Product\Specification\SpecificationResource;
use App\Http\Resources\Business\Resource\Product\Bundle\BundleResource;
use App\Http\Resources\Business\Resource\Product\Image\ImageResource;
use App\Http\Resources\Business\Resource\Product\Review\ReviewResource;
use App\Http\Resources\Business\Resource\Product\Size\SizeResource;
use App\Http\Resources\Business\Resource\Product\Color\ColorResource;
use App\Http\Resources\Business\Resource\Product\Tag\TagResource;

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
            'id'                            => $this -> resource -> id,
            'type'                          => 'Product',

            'attributes' =>
            [
                'resource_id'               => $this -> resource -> resource_id,

                'name'                      => $this -> resource -> name,
                'brand'                     => $this -> resource -> productBrand -> name,
                'sku'                       => $this -> resource -> sku,
                'slug'                      => $this -> resource -> slug,
                'description'               => $this -> resource -> description,

                'price_group'               => $this -> resource -> price_group,

                'raw_price'                 => $this -> when( $request -> is( 'juasoonline/*' ), $this -> when($this -> resource -> price_group === "Product", $this -> resource -> price ) ),
                'raw_sales_price'           => $this -> when( $request -> is( 'juasoonline/*' ), $this -> when($this -> resource -> price_group === "Product", $this -> resource -> sales_price ) ),

                'price'                     => $this -> when($this -> resource -> price_group === "Product", "GH₵" . number_format( $this -> resource -> price, 2 ) ),
                'sales_price'               => $this -> when($this -> resource -> price_group === "Product", "GH₵" . number_format( $this -> resource -> sales_price, 2 ) ),

                'discount_amount'           => $this -> when($this -> resource -> price_group === "Product", "GH₵" . round(( $this -> resource -> price - $this -> resource -> sales_price ), 0 ) ),
                'discount_percentage'       => $this -> when($this -> resource -> price_group === "Product", ( $this -> resource -> price - $this -> resource -> sales_price ) / 100 . "%" ),

                'percentage_charge'         => $this -> when($this -> resource -> price_group === "Product", "GH₵" . $this -> resource -> chargeValues -> fee ),
                'amount_charge'             => $this -> when($this -> resource -> price_group === "Product", "GH₵" . number_format($this -> resource -> sales_price * $this -> resource -> chargeValues -> fee, 2)),

                'quantity'                  => $this -> resource -> quantity,
                'total_sold'                => $this -> resource -> total_sold,

                'image'                     => $this -> resource -> mainImage[0]['image'],

                'status'                    => $this -> when( $request -> is( 'juasoonline/*' ), $this -> resource -> status ),

                'rating'                    => getRating( $this -> resource -> review -> where( 'rating', 5 ) -> count(), $this -> resource -> review -> where( 'rating', 4 ) -> count(), $this -> resource -> review -> where( 'rating', 3 ) -> count(), $this -> resource -> review -> where( 'rating', 2 ) -> count(), $this -> resource -> review -> where( 'rating', 1 ) -> count() ),

                'created_at'                => $this -> when( $request -> is( 'juasoonline/*' ), $this -> resource -> created_at -> toDateTimeString()),
                'updated_at'                => $this -> when( $request -> is( 'juasoonline/*' ), $this -> resource -> updated_at -> toDateTimeString()),
            ],

            'include'                       => $this -> when( $this -> relationLoaded( 'store' ) || $this -> relationLoaded( 'brand' ) || $this -> relationLoaded( 'charge' ) || $this -> relationLoaded( 'store_categories' ) || $this -> relationLoaded( 'categories' ) || $this -> relationLoaded( 'tags' ) || $this -> relationLoaded( 'specifications' ) || $this -> relationLoaded( 'reviews' ) || $this -> relationLoaded( 'overviews' ) || $this -> relationLoaded( 'images' ) || $this -> relationLoaded( 'colors' ) || $this -> relationLoaded( 'sizes' ) || $this -> relationLoaded( 'faqs' ) || $this -> relationLoaded( 'bundles' ) || $this -> relationLoaded( 'promotions' ),
            [
                'brand'                     => new BrandResource( $this -> whenLoaded('brand')),
                'charge'                    => new ChargeResource( $this -> whenLoaded('charge')),

                'store'                     => new StoreResource( $this -> whenLoaded('store')),
                'store_categories'          => StoreSubcategoryResource::collection( $this -> whenLoaded('store_categories')),
                'categories'                => SubcategoryResource::collection( $this -> whenLoaded('categories')),
                'tags'                      => TagResource::collection( $this -> whenLoaded('tags')),
                'specifications'            => SpecificationResource::collection( $this -> whenLoaded('specifications')),
                'images'                    => ImageResource::collection( $this -> whenLoaded('images')),
                'colors'                    => ColorResource::collection( $this -> whenLoaded('colors')),
                'sizes'                     => SizeResource::collection( $this -> whenLoaded('sizes')),
                'bundles'                   => BundleResource::collection( $this -> whenLoaded('bundles')),
                'overviews'                 => OverviewResource::collection( $this -> whenLoaded('overviews')),
                'reviews'                   => ReviewResource::collection( $this -> whenLoaded('reviews')),
                'faqs'                      => FaqResource::collection( $this -> whenLoaded('faqs')),
                'promotions'                => PromotionResource::collection( $this -> whenLoaded('promotions')),
            ])
        ];
    }
}
