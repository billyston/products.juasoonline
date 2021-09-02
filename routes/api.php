<?php

use App\Http\Controllers\Juaso\Resource\Country\CountryController;
use App\Http\Controllers\Juaso\Resource\Brand\BrandController;
use App\Http\Controllers\Juaso\Resource\PromoType\PromoTypeController;
use App\Http\Controllers\Juaso\Resource\Group\GroupController;
use App\Http\Controllers\Juaso\Resource\Category\CategoryController;
use App\Http\Controllers\Juaso\Resource\Subcategory\SubcategoryController;
use App\Http\Controllers\Juaso\Resource\Subscription\SubscriptionController;
use App\Http\Controllers\Juaso\Business\Store\Store\JuasoStoreController;
use App\Http\Controllers\Juaso\Business\Store\Charge\JuasoChargeController;
use App\Http\Controllers\Juaso\Business\Product\Product\JuasoProductController;
use App\Http\Controllers\Juaso\Juasoonline\Customer\JuasoCustomerController;

use App\Http\Controllers\Business\Resource\Store\Store\StoreController;
use App\Http\Controllers\Business\Resource\Store\StoreAdministrator\StoreAdministratorController;
use App\Http\Controllers\Business\Resource\Store\Branch\BranchController;
use App\Http\Controllers\Business\Resource\Store\Charge\ChargeController;
use App\Http\Controllers\Business\Resource\Store\StoreReview\StoreReviewController;
use App\Http\Controllers\Business\Resource\Store\Follower\FollowerController;
use App\Http\Controllers\Business\Resource\Store\StoreCategory\StoreCategoryController;
use App\Http\Controllers\Business\Resource\Store\StoreSubcategory\StoreSubcategoryController;
use App\Http\Controllers\Business\Resource\Product\Product\ProductController;
use App\Http\Controllers\Business\Resource\Product\Specification\SpecificationController;
use App\Http\Controllers\Business\Resource\Product\Image\ImageController;
use App\Http\Controllers\Business\Resource\Product\Color\ColorController;
use App\Http\Controllers\Business\Resource\Product\Size\SizeController;
use App\Http\Controllers\Business\Resource\Product\Bundle\BundleController;
use App\Http\Controllers\Business\Resource\Product\Overview\OverviewController;
use App\Http\Controllers\Business\Resource\Product\Review\ReviewController;
use App\Http\Controllers\Business\Resource\Product\Faq\FaqController;
use App\Http\Controllers\Business\Resource\Product\Promotion\PromotionController;
use App\Http\Controllers\Business\Juaso\Group\JuasoGroupController;
use App\Http\Controllers\Business\Juaso\Category\JuasoCategoryController;
use App\Http\Controllers\Business\Juaso\Subcategory\JuasoSubcategoryController;
use App\Http\Controllers\Business\Juaso\Country\JuasoCountryController;
use App\Http\Controllers\Business\Juaso\Brand\JuasoBrandController;
use App\Http\Controllers\Business\Juaso\PromoType\JuasoPromoTypeController;

use App\Http\Controllers\Juasoonline\Resource\Customer\Customer\CustomerController;
use App\Http\Controllers\Juasoonline\Resource\Customer\Address\AddressController;
use App\Http\Controllers\Juasoonline\Resource\Customer\Wishlist\WishlistController;
use App\Http\Controllers\Juasoonline\Resource\Customer\Cart\CartController;
use App\Http\Controllers\Juasoonline\Resource\Customer\Store\CustomerStoreController;
use App\Http\Controllers\Juasoonline\Business\Store\JuasoonlineStoresController;
use App\Http\Controllers\Juasoonline\Business\Product\JuasoonlineProductsController;
use App\Http\Controllers\Juasoonline\Juaso\Category\JuasoonlineCategoryController;
use App\Http\Controllers\Juasoonline\Juaso\Group\JuasoonlineGroupController;
use App\Http\Controllers\Juasoonline\Juaso\Subcategory\JuasoonlineSubcategoryController;
use App\Http\Controllers\Juasoonline\Resource\JuasoonlineController;

use Illuminate\Support\Facades\Route;

// Business admin resource routes
Route::group(['prefix' => 'api/v1'], function ()
{
    // Business resource routes
    Route::group(['prefix' => 'juaso'], function ()
    {
        // juaso and related routes
        Route::group(['prefix' => 'resources'], function ()
        {
            Route::apiResource('countries', CountryController::class );
            Route::apiResource('brands', BrandController::class );
            Route::apiResource('promo-types', PromoTypeController::class );
            Route::apiResource('groups', GroupController::class );
            Route::apiResource('categories', CategoryController::class );
            Route::apiResource('subcategories', SubcategoryController::class );
            Route::apiResource('subscriptions', SubscriptionController::class, [ 'parameters' => [ 'subscriptions' => 'vendor_subscription' ]] );
        });

        // Business and related routes
        Route::group(['prefix' => 'business'], function()
        {
            // Store and related routes
            Route::apiResource('stores', JuasoStoreController::class ) -> only( 'index', 'show', 'update', 'destroy' );
            Route::apiResource('stores.charges', JuasoChargeController::class ) -> only( 'index', 'store', 'show', 'update' );

            // Product route and actions
            Route::get('products', [ JuasoProductController::class, 'index' ]);
            Route::get('products/{product}', [ JuasoProductController::class, 'show' ]);
            Route::delete('products/{product}', [ JuasoProductController::class, 'destroy' ]);
        });

        // juasoonline and related routes
        Route::group(['prefix' => 'juasoonline'], function()
        {
            Route::get('customers', [ JuasoCustomerController::class, 'index' ]);
            Route::get('customers/{customer}', [ JuasoCustomerController::class, 'show' ]);
            Route::delete('customers/{customer}', [ JuasoCustomerController::class, 'destroy' ]);
        });
    });

    // Business resource routes
    Route::group(['prefix' => 'business'], function ()
    {
        // Store and related resources
        Route::group([], function()
        {
            Route::apiResource( 'stores', StoreController::class ) -> except('index', 'destroy');
            Route::apiResource( 'stores.administrators', StoreAdministratorController::class, [ 'parameters' => [ 'administrators' => 'store_administrator' ]] ) -> except('index', 'destroy');
            Route::apiResource( 'stores.branches', BranchController::class );
            Route::apiResource( 'stores.charges', ChargeController::class ) -> only( 'index', 'show' );
            Route::apiResource( 'stores.reviews', StoreReviewController::class ) -> only( 'index', 'show', 'update' );
            Route::apiResource( 'stores.followers', FollowerController::class );
            Route::apiResource( 'stores.categories', StoreCategoryController::class, [ 'parameters' => [ 'stores' => 'store', 'categories' => 'store_category' ]] );
            Route::apiResource( 'categories.subcategories', StoreSubcategoryController::class, [ 'parameters' => [ 'categories' => 'store_category', 'subcategories' => 'store_subcategory' ]] );
            Route::apiResource( 'stores.products', ProductController::class );

            Route::get( 'stores/{store}/review/stats', [StoreReviewController::class, 'getStats'] ) -> name('stores.reviews.stats');
        });

        // Product and related resources
        Route::group([], function()
        {
            Route::apiResource( 'products.specifications', SpecificationController::class );
            Route::apiResource( 'products.images', ImageController::class );
            Route::apiResource( 'products.colors', ColorController::class );
            Route::apiResource( 'products.sizes', SizeController::class );
            Route::apiResource( 'products.bundles', BundleController::class );
            Route::apiResource( 'products.overviews', OverviewController::class );
            Route::apiResource( 'products.reviews', ReviewController::class );
            Route::apiResource( 'products.faqs', FaqController::class );
            Route::apiResource( 'products.promotions', PromotionController::class );
        });

        // Business and related routes
        Route::group(['prefix' => 'juaso/resources'], function ()
        {
            Route::get( 'countries', [JuasoCountryController::class, 'index'] );
            Route::get( 'countries/{country}', [JuasoCountryController::class, 'show'] );

            Route::get( 'brands', [JuasoBrandController::class, 'index'] );
            Route::get( 'brands/{brand}', [JuasoBrandController::class, 'show'] );

            Route::get( 'promo-types', [JuasoPromoTypeController::class, 'index'] );
            Route::get( 'promo-types/{PromoType}', [JuasoPromoTypeController::class, 'show'] );

            Route::get( 'groups', [JuasoGroupController::class, 'index'] );
            Route::get( 'groups/{group}', [JuasoGroupController::class, 'show'] );

            Route::get('categories', [JuasoCategoryController::class, 'index']);
            Route::get('categories/{category}', [JuasoCategoryController::class, 'show']);

            Route::get('subcategories', [JuasoSubcategoryController::class, 'index']);
            Route::get('subcategories/{subcategory}', [JuasoSubcategoryController::class, 'show']);
        });

        // Juasoonline and related routes
        Route::group(['prefix' => 'juasoonline'], function ()
        {
        });
    });

    // Juasoonline resource routes
    Route::group(['prefix' => 'juasoonline'], function ()
    {
        // Customer and related routes
        Route::group([], function ()
        {
            // Customer main resource
            Route::apiResource( 'customers', CustomerController::class ) -> only( 'store', 'show', 'update');
            Route::apiResource( 'customers.addresses', AddressController::class );
            Route::apiResource( 'customers.wishlists', WishlistController::class ) -> only( 'index', 'store', 'destroy');
            Route::apiResource( 'customers.carts', CartController::class ) -> only( 'index', 'store', 'update', 'destroy');

            Route::get('customers/{customer}/stats', [CustomerController::class, 'getStats']);
            Route::post('customers/{customer}/stores/{store}/reviews', [CustomerController::class, 'createStoreReview']);
            Route::post('customers/{customer}/products/{product}/reviews', [CustomerController::class, 'createProductReview']);
            Route::post('customers/{customer}/products/{product}/faqs', [CustomerController::class, 'createProductFaq']);

            // Customer store resource
            Route::get('customers/{customer}/stores', [CustomerStoreController::class, 'getStores']);
            Route::post('customers/{customer}/stores/{store}/follow', [CustomerStoreController::class, 'follow']);
            Route::post('customers/{customer}/stores/{store}/unfollow', [CustomerStoreController::class, 'unFollow']);
        });

        // Business and related routes
        Route::group(['prefix' => 'juaso/resources'], function ()
        {
            Route::get( 'groups', [JuasoonlineGroupController::class, 'getGroups'] );
            Route::get( 'groups/{group}', [JuasoonlineGroupController::class, 'getGroup'] );

            Route::get('categories', [JuasoonlineCategoryController::class, 'getCategories']);
            Route::get('categories/{category}', [JuasoonlineCategoryController::class, 'getCategory']);

            Route::get('subcategories', [JuasoonlineSubcategoryController::class, 'getSubcategories']);
            Route::get('subcategories/{subcategory}', [JuasoonlineSubcategoryController::class, 'getSubcategory']);
        });

        // Business resource routes
        Route::group(['prefix' => 'business'], function ()
        {
            // Store and related resource routes
            Route::group(['prefix' => 'stores'], function ()
            {
                Route::get( '{store}', [JuasoonlineStoresController::class, 'getStore' ]);
                Route::get( '{store}/products', [JuasoonlineStoresController::class, 'getStoreProducts']);
                Route::get( '{store}/products/{product}/recommendations', [JuasoonlineStoresController::class, 'getStoreRecommendations']);
                Route::get( '{store}/top-selling', [JuasoonlineStoresController::class, 'getStoreTopSelling' ]);
                Route::get( '{store}/stats', [JuasoonlineStoresController::class, 'getStoreStats']);
            });

            // Product and related resource routes
            Route::group(['prefix' => 'products'], function ()
            {
                Route::get('', [JuasoonlineProductsController::class, 'getProducts']);
                Route::get('{product}', [JuasoonlineProductsController::class, 'getProduct']);
                Route::get('{product}/recommendations', [JuasoonlineProductsController::class, 'getProductRecommendations']);
            });
        });

        // Ad routes
        Route::group(['prefix' => 'ads'], function ()
        {
            Route::get('slider-ads', [JuasoonlineController::class, 'sliderAds']);
            Route::get('quick-deals', [JuasoonlineController::class, 'quickDeals']);
        });
    });
});
