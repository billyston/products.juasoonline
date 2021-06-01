<?php

use App\Http\Controllers\Juasoonline\JuasoonlineController;
use App\Http\Controllers\Others\Country\CountryController;
use App\Http\Controllers\Others\PromoType\PromoTypeController;
use App\Http\Controllers\Others\Brand\BrandController;
use App\Http\Controllers\Others\Group\GroupController;
use App\Http\Controllers\Others\Category\CategoryController;
use App\Http\Controllers\Others\Subcategory\SubcategoryController;

use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Store\StoreAdministrator\StoreAdministratorController;
use App\Http\Controllers\Store\Branch\BranchController;
use App\Http\Controllers\Store\Charge\ChargeController;

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\Image\ImageController;
use App\Http\Controllers\Product\Specification\SpecificationController;
use App\Http\Controllers\Product\Overview\OverviewController;
use App\Http\Controllers\Product\Review\ReviewController;
use App\Http\Controllers\Product\Color\ColorController;
use App\Http\Controllers\Product\Size\SizeController;
use App\Http\Controllers\Product\Promotion\PromotionController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([], function ()
{
    // Other resource routes
    Route::group([], function ()
    {
        Route::apiResource('countries', CountryController::class );
        Route::apiResource('promo-types', PromoTypeController::class );
        Route::apiResource('groups', GroupController::class );
        Route::apiResource('categories', CategoryController::class );
        Route::apiResource('subcategories', SubcategoryController::class );
        Route::apiResource('brands', BrandController::class );
    });

    // Store and related resources routes
    Route::group([], function()
    {
        Route::apiResource( 'stores', StoreController::class ) -> except('index');
        Route::apiResource( 'store.administrator', StoreAdministratorController::class, [ 'parameters' => [ 'administrator' => 'store_administrator' ]] ) -> except('index');
        Route::apiResource( 'store.branches', BranchController::class );
        Route::apiResource( 'store.charges', ChargeController::class );
    });

    // Product and related resources routes
    Route::group([], function()
    {
        Route::apiResource( 'store.products', ProductController::class, [ 'parameters' => [ '' => 'product' ]] );
        Route::apiResource( 'product.images', ImageController::class );
        Route::apiResource( 'product.specifications', SpecificationController::class );
        Route::apiResource( 'product.overviews', OverviewController::class );
        Route::apiResource( 'product.reviews', ReviewController::class );
        Route::apiResource( 'product.colors', ColorController::class );
        Route::apiResource( 'product.sizes', SizeController::class );
        Route::apiResource( 'product.promotions', PromotionController::class );
    });

    // Juasoonline resources routes
    Route::group(['prefix' => 'juaso'], function ()
    {
        // Product routes
        Route::get( 'products', [ JuasoonlineController::class, 'products' ]);
        Route::get( 'product/{product}', [ JuasoonlineController::class, 'product' ]);
        Route::get( 'products/recommendations', [ JuasoonlineController::class, 'recommendations' ]);

        // Store routes
        Route::get( 'store/{store}/products', [ JuasoonlineController::class, 'storeProducts' ]);
    });
});
