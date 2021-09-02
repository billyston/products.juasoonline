<?php

namespace App\Providers;

use App\Models\Juaso\Country\Country;
use App\Models\Juaso\Brand\Brand;
use App\Models\Juaso\PromoType\PromoType;
use App\Models\Juaso\Group\Group;
use App\Models\Juaso\Category\Category;
use App\Models\Juaso\Subcategory\Subcategory;
use App\Models\Juaso\Tag\Tag;
use App\Observers\Juaso\Country\CountryObserver;
use App\Observers\Juaso\PromoType\PromoTypeObserver;
use App\Observers\Juaso\Group\GroupObserver;
use App\Observers\Juaso\Category\CategoryObserver;
use App\Observers\Juaso\Subcategory\SubcategoryObserver;
use App\Observers\Juaso\Brand\BrandObserver;
use App\Observers\Juaso\Tag\TagObserver;

use App\Models\Business\Store\Store\Store;
use App\Observers\Business\Store\Store\StoreObserver;
use App\Models\Business\Store\StoreAdministrator\StoreAdministrator;
use App\Observers\Business\Store\StoreAdministrator\StoreAdministratorObserver;
use App\Models\Business\Store\Branch\Branch;
use App\Observers\Business\Store\Branch\BranchObserver;
use App\Models\Business\Store\Charge\Charge;
use App\Observers\Business\Store\Charge\ChargeObserver;
use App\Observers\Business\Store\StoreReview\StoreReviewObserver;
use App\Models\Business\Store\StoreReview\StoreReview;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Observers\Business\Store\StoreCategory\StoreCategoryObserver;
use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;
use App\Observers\Business\Store\StoreSubcategory\ProductSubcategoryObserver;
use App\Models\Business\Product\Product\Product;
use App\Observers\Business\Product\Product\ProductObserver;
use App\Models\Business\Product\Image\Image;
use App\Observers\Business\Product\Image\ImageObserver;
use App\Models\Business\Product\Specification\Specification;
use App\Observers\Business\Product\Specification\SpecificationObserver;
use App\Models\Business\Product\Overview\Overview;
use App\Observers\Business\Product\Overview\OverviewObserver;
use App\Models\Business\Product\Faq\Faq;
use App\Observers\Business\Product\Faq\FaqObserver;
use App\Models\Business\Product\Review\Review;
use App\Observers\Business\Product\Review\ReviewObserver;
use App\Observers\Business\Product\Color\ColorObserver;
use App\Models\Business\Product\Color\Color;
use App\Models\Business\Product\Size\Size;
use App\Observers\Business\Product\Size\SizeObserver;
use App\Models\Business\Product\Promotion\Promotion;
use App\Observers\Business\Product\Promotion\PromotionObserver;
use App\Observers\Business\Product\Bundle\BundleObserver;
use App\Models\Business\Product\Bundle\Bundle;

use App\Models\Juasoonline\Customer\Customer\Customer;
use App\Observers\Juasoonline\Customer\Customer\CustomerObserver;
use App\Models\Juasoonline\Customer\Address\Address;
use App\Observers\Juasoonline\Customer\Address\AddressObserver;
use App\Models\Juasoonline\Customer\Wishlist\Wishlist;
use App\Observers\Juasoonline\Customer\Wishlist\WishlistObserver;
use App\Models\Juasoonline\Customer\Cart\Cart;
use App\Observers\Juasoonline\Customer\Cart\CartObserver;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Country::observe( CountryObserver::class );
        Brand::observe( BrandObserver::class );
        PromoType::observe( PromoTypeObserver::class );
        Group::observe( GroupObserver::class );
        Category::observe( CategoryObserver::class );
        Subcategory::observe( SubcategoryObserver::class );
        Tag::observe( TagObserver::class );

        Store::observe( StoreObserver::class );
        StoreAdministrator::observe( StoreAdministratorObserver::class );
        Branch::observe( BranchObserver::class );
        Charge::observe( ChargeObserver::class );
        StoreReview::observe( StoreReviewObserver::class );
        StoreCategory::observe( StoreCategoryObserver::class );
        StoreSubcategory::observe( ProductSubcategoryObserver::class );
        Product::observe( ProductObserver::class );
        Image::observe( ImageObserver::class );
        Color::observe( ColorObserver::class );
        Size::observe( SizeObserver::class );
        Specification::observe( SpecificationObserver::class );
        Overview::observe( OverviewObserver::class );
        Review::observe( ReviewObserver::class );
        Faq::observe( FaqObserver::class );
        Promotion::observe( PromotionObserver::class );
        Bundle::observe( BundleObserver::class );

        Customer::observe( CustomerObserver::class );
        Address::observe( AddressObserver::class );
        Wishlist::observe( WishlistObserver::class );
        Cart::observe( CartObserver::class );
    }
}
