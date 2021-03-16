<?php

use App\Http\Controllers\Branch\BranchController;
use App\Http\Controllers\Group\GroupController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Overview\OverviewController;
use App\Http\Controllers\ProductImage\ProductImageController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Specification\SpecificationController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\StoreAdministrator\StoreAdministratorController;
use App\Http\Controllers\Subcategory\SubcategoryController;
use App\Http\Controllers\Product\ProductController;
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

Route::group( [], function ()
{
    Route::apiResource( 'stores', StoreController::class );
    Route::prefix( 'store' ) -> group( function () { Route::apiResource( 'administrator', StoreAdministratorController::class ); } );
    Route::prefix( 'store' ) -> group( function () { Route::apiResource( 'branches', BranchController::class ); });

    Route::apiResource( 'groups', GroupController::class );
    Route::apiResource( 'categories', CategoryController::class );
    Route::apiResource( 'subcategories', SubcategoryController::class );

    Route::apiResource( 'products', ProductController::class );
    Route::prefix( 'product' ) -> group( function () { Route::apiResource( 'images', ProductImageController::class ); });
    Route::prefix( 'product' ) -> group( function () { Route::apiResource( 'specifications', SpecificationController::class ); });
    Route::prefix( 'product' ) -> group( function () { Route::apiResource( 'reviews', ReviewController::class ); });
    Route::prefix( 'product' ) -> group( function () { Route::apiResource( 'overviews', OverviewController::class ); });
});
