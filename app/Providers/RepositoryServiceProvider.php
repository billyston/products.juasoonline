<?php

namespace App\Providers;

use App\Repositories\Juaso\Resource\Country\CountryRepositoryInterface;
use App\Repositories\Juaso\Resource\Country\CountryRepository;
use App\Repositories\Juaso\Resource\Brand\BrandRepositoryInterface;
use App\Repositories\Juaso\Resource\Brand\BrandRepository;
use App\Repositories\Juaso\Resource\PromoType\PromoTypeRepositoryInterface;
use App\Repositories\Juaso\Resource\PromoType\PromoTypeRepository;
use App\Repositories\Juaso\Resource\Group\GroupRepositoryInterface;
use App\Repositories\Juaso\Resource\Group\GroupRepository;
use App\Repositories\Juaso\Resource\Category\CategoryRepositoryInterface;
use App\Repositories\Juaso\Resource\Category\CategoryRepository;
use App\Repositories\Juaso\Resource\Subcategory\SubcategoryRepositoryInterface;
use App\Repositories\Juaso\Resource\Subcategory\SubcategoryRepository;
use App\Repositories\Juaso\Resource\Subscription\SubscriptionRepositoryInterface;
use App\Repositories\Juaso\Resource\Subscription\SubscriptionRepository;
use App\Repositories\Juaso\Business\Store\JuasoStoreRepositoryInterface;
use App\Repositories\Juaso\Business\Store\JuasoStoreRepository;
use App\Repositories\Juaso\Business\Store\Charge\JuasoChargeRepositoryInterface;
use App\Repositories\Juaso\Business\Store\Charge\JuasoChargeRepository;
use App\Repositories\Juaso\Business\Product\JuasoProductRepositoryInterface;
use App\Repositories\Juaso\Business\Product\JuasoProductRepository;
use App\Repositories\Juaso\Juasoonline\Customer\JuasoCustomerRepositoryInterface;
use App\Repositories\Juaso\Juasoonline\Customer\JuasoCustomerRepository;

use App\Repositories\Business\Resource\Store\Store\StoreRepositoryInterface;
use App\Repositories\Business\Resource\Store\Store\StoreRepository;
use App\Repositories\Business\Resource\Store\StoreAdministrator\StoreAdministratorRepositoryInterface;
use App\Repositories\Business\Resource\Store\StoreAdministrator\StoreAdministratorRepository;
use App\Repositories\Business\Resource\Store\Branch\BranchRepositoryInterface;
use App\Repositories\Business\Resource\Store\Branch\BranchRepository;
use App\Repositories\Business\Resource\Store\Charge\ChargeRepositoryInterface;
use App\Repositories\Business\Resource\Store\Charge\ChargeRepository;
use App\Repositories\Business\Resource\Store\StoreReview\StoreReviewRepositoryInterface;
use App\Repositories\Business\Resource\Store\StoreReview\StoreReviewRepository;
use App\Repositories\Business\Resource\Store\Follower\FollowerRepository;
use App\Repositories\Business\Resource\Store\Follower\FollowerRepositoryInterface;
use App\Repositories\Business\Resource\Store\StoreCategory\StoreCategoryRepositoryInterface;
use App\Repositories\Business\Resource\Store\StoreCategory\StoreCategoryRepository;
use App\Repositories\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRepositoryInterface;
use App\Repositories\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRepository;
use App\Repositories\Business\Resource\Product\Product\ProductRepositoryInterface;
use App\Repositories\Business\Resource\Product\Product\ProductRepository;
use App\Repositories\Business\Resource\Product\Image\ImageRepositoryInterface;
use App\Repositories\Business\Resource\Product\Image\ImageRepository;
use App\Repositories\Business\Resource\Product\Color\ColorRepositoryInterface;
use App\Repositories\Business\Resource\Product\Color\ColorRepository;
use App\Repositories\Business\Resource\Product\Size\SizeRepositoryInterface;
use App\Repositories\Business\Resource\Product\Size\SizeRepository;
use App\Repositories\Business\Resource\Product\Specification\SpecificationRepositoryInterface;
use App\Repositories\Business\Resource\Product\Specification\SpecificationRepository;
use App\Repositories\Business\Resource\Product\Overview\OverviewRepositoryInterface;
use App\Repositories\Business\Resource\Product\Overview\OverviewRepository;
use App\Repositories\Business\Resource\Product\Review\ReviewRepositoryInterface;
use App\Repositories\Business\Resource\Product\Review\ReviewRepository;
use App\Repositories\Business\Resource\Product\Faq\FaqRepositoryInterface;
use App\Repositories\Business\Resource\Product\Faq\FaqRepository;
use App\Repositories\Business\Resource\Product\Promotion\PromotionRepositoryInterface;
use App\Repositories\Business\Resource\Product\Promotion\PromotionRepository;
use App\Repositories\Business\Resource\Product\Bundle\BundleRepositoryInterface;
use App\Repositories\Business\Resource\Product\Bundle\BundleRepository;
use App\Repositories\Business\Juaso\Group\JuasoGroupRepositoryInterface;
use App\Repositories\Business\Juaso\Group\JuasoGroupRepository;
use App\Repositories\Business\Juaso\Category\JuasoCategoryRepositoryInterface;
use App\Repositories\Business\Juaso\Category\JuasoCategoryRepository;
use App\Repositories\Business\Juaso\Subcategory\JuasoSubcategoryRepositoryInterface;
use App\Repositories\Business\Juaso\Subcategory\JuasoSubcategoryRepository;
use App\Repositories\Business\Juaso\Country\JuasoCountryRepositoryInterface;
use App\Repositories\Business\Juaso\Country\JuasoCountryRepository;
use App\Repositories\Business\Juaso\Brand\JuasoBrandRepositoryInterface;
use App\Repositories\Business\Juaso\Brand\JuasoBrandRepository;
use App\Repositories\Business\Juaso\PromoType\JuasoPromoTypeRepositoryInterface;
use App\Repositories\Business\Juaso\PromoType\JuasoPromoTypeRepository;

use App\Repositories\Juasoonline\Resource\Customer\Customer\CustomerRepositoryInterface;
use App\Repositories\Juasoonline\Resource\Customer\Customer\CustomerRepository;
use App\Repositories\Juasoonline\Resource\Customer\Address\AddressRepositoryInterface;
use App\Repositories\Juasoonline\Resource\Customer\Address\AddressRepository;
use App\Repositories\Juasoonline\Resource\Customer\Wishlist\WishlistRepositoryInterface;
use App\Repositories\Juasoonline\Resource\Customer\Wishlist\WishlistRepository;
use App\Repositories\Juasoonline\Resource\Customer\Cart\CartRepositoryInterface;
use App\Repositories\Juasoonline\Resource\Customer\Cart\CartRepository;
use App\Repositories\Juasoonline\Resource\Customer\Store\CustomerStoreRepositoryInterface;
use App\Repositories\Juasoonline\Resource\Customer\Store\CustomerStoreRepository;
use App\Repositories\Juasoonline\Business\Store\JuasoonlineStoresRepositoryInterface;
use App\Repositories\Juasoonline\Business\Store\JuasoonlineStoresRepository;
use App\Repositories\Juasoonline\Business\Product\JuasoonlineProductsRepositoryInterface;
use App\Repositories\Juasoonline\Business\Product\JuasoonlineProductsRepository;
use App\Repositories\Juasoonline\Juaso\Group\JuasoonlineGroupRepositoryInterface;
use App\Repositories\Juasoonline\Juaso\Group\JuasoonlineGroupRepository;
use App\Repositories\Juasoonline\Juaso\Category\JuasoonlineCategoryRepositoryInterface;
use App\Repositories\Juasoonline\Juaso\Category\JuasoonlineCategoryRepository;
use App\Repositories\Juasoonline\Juaso\Subcategory\JuasoonlineSubcategoryRepositoryInterface;
use App\Repositories\Juasoonline\Juaso\Subcategory\JuasoonlineSubcategoryRepository;
use App\Repositories\Juasoonline\Resource\JuasoonlineRepositoryInterface;
use App\Repositories\Juasoonline\Resource\JuasoonlineRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    public function register()
    {
        $this -> app -> bind( CountryRepositoryInterface::class, CountryRepository::class );
        $this -> app -> bind( BrandRepositoryInterface::class, BrandRepository::class );
        $this -> app -> bind( PromoTypeRepositoryInterface::class, PromoTypeRepository::class );
        $this -> app -> bind( GroupRepositoryInterface::class, GroupRepository::class );
        $this -> app -> bind( CategoryRepositoryInterface::class, CategoryRepository::class );
        $this -> app -> bind( SubcategoryRepositoryInterface::class, SubcategoryRepository::class );
        $this -> app -> bind( SubscriptionRepositoryInterface::class, SubscriptionRepository::class );
        $this -> app -> bind( JuasoStoreRepositoryInterface::class, JuasoStoreRepository::class );
        $this -> app -> bind( JuasoChargeRepositoryInterface::class, JuasoChargeRepository::class );
        $this -> app -> bind( JuasoProductRepositoryInterface::class, JuasoProductRepository::class );
        $this -> app -> bind( JuasoCustomerRepositoryInterface::class, JuasoCustomerRepository::class );

        $this -> app -> bind( StoreRepositoryInterface::class, StoreRepository::class );
        $this -> app -> bind( StoreAdministratorRepositoryInterface::class, StoreAdministratorRepository::class );
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );
        $this -> app -> bind( ChargeRepositoryInterface::class, ChargeRepository::class );
        $this -> app -> bind( StoreReviewRepositoryInterface::class, StoreReviewRepository::class );
        $this -> app -> bind( FollowerRepositoryInterface::class, FollowerRepository::class );
        $this -> app -> bind( StoreCategoryRepositoryInterface::class, StoreCategoryRepository::class );
        $this -> app -> bind( StoreSubcategoryRepositoryInterface::class, StoreSubcategoryRepository::class );
        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( ImageRepositoryInterface::class, ImageRepository::class );
        $this -> app -> bind( SpecificationRepositoryInterface::class, SpecificationRepository::class );
        $this -> app -> bind( ColorRepositoryInterface::class, ColorRepository::class );
        $this -> app -> bind( SizeRepositoryInterface::class, SizeRepository::class );
        $this -> app -> bind( OverviewRepositoryInterface::class, OverviewRepository::class );
        $this -> app -> bind( FaqRepositoryInterface::class, FaqRepository::class );
        $this -> app -> bind( ReviewRepositoryInterface::class, ReviewRepository::class );
        $this -> app -> bind( PromotionRepositoryInterface::class, PromotionRepository::class );
        $this -> app -> bind( BundleRepositoryInterface::class, BundleRepository::class );
        $this -> app -> bind( JuasoGroupRepositoryInterface::class, JuasoGroupRepository::class );
        $this -> app -> bind( JuasoCategoryRepositoryInterface::class, JuasoCategoryRepository::class );
        $this -> app -> bind( JuasoSubcategoryRepositoryInterface::class, JuasoSubcategoryRepository::class );
        $this -> app -> bind( JuasoCountryRepositoryInterface::class, JuasoCountryRepository::class );
        $this -> app -> bind( JuasoBrandRepositoryInterface::class, JuasoBrandRepository::class );
        $this -> app -> bind( JuasoPromoTypeRepositoryInterface::class, JuasoPromoTypeRepository::class );

        $this -> app -> bind( CustomerRepositoryInterface::class, CustomerRepository::class );
        $this -> app -> bind( AddressRepositoryInterface::class, AddressRepository::class );
        $this -> app -> bind( WishlistRepositoryInterface::class, WishlistRepository::class );
        $this -> app -> bind( CartRepositoryInterface::class, CartRepository::class );
        $this -> app -> bind( CustomerStoreRepositoryInterface::class, CustomerStoreRepository::class );
        $this -> app -> bind( JuasoonlineStoresRepositoryInterface::class, JuasoonlineStoresRepository::class );
        $this -> app -> bind( JuasoonlineProductsRepositoryInterface::class, JuasoonlineProductsRepository::class );
        $this -> app -> bind( JuasoonlineGroupRepositoryInterface::class, JuasoonlineGroupRepository::class );
        $this -> app -> bind( JuasoonlineCategoryRepositoryInterface::class, JuasoonlineCategoryRepository::class );
        $this -> app -> bind( JuasoonlineSubcategoryRepositoryInterface::class, JuasoonlineSubcategoryRepository::class );
        $this -> app -> bind( JuasoonlineRepositoryInterface::class, JuasoonlineRepository::class );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
