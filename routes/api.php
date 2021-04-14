<?php

use App\Http\Controllers\Group\GroupController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Subcategory\SubcategoryController;

use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Store\StoreAdministrator\StoreAdministratorController;
use App\Http\Controllers\Store\Branch\BranchController;

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\Image\ImageController;
use App\Http\Controllers\Product\Specification\SpecificationController;
use App\Http\Controllers\Product\Overview\OverviewController;
use App\Http\Controllers\Product\Review\ReviewController;

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
    Route::apiResource( 'groups', GroupController::class );
    Route::apiResource( 'categories', CategoryController::class );
    Route::apiResource( 'subcategories', SubcategoryController::class );

    Route::group([ 'prefix' => 'stores' ], function()
    {
        Route::apiResource( '', StoreController::class, [ 'parameters' => [ '' => 'store' ]] );
        Route::apiResource( 'administrator', StoreAdministratorController::class, [ 'parameters' => [ 'administrator' => 'store_administrator' ]] );
        Route::apiResource( 'branches', BranchController::class );
    });

    Route::group([], function()
    {
        Route::apiResource( 'store.products', ProductController::class, [ 'parameters' => [ '' => 'product' ]] );
        Route::apiResource( 'product.images', ImageController::class );
        Route::apiResource( 'product.specifications', SpecificationController::class );
        Route::apiResource( 'product.overviews', OverviewController::class );
        Route::apiResource( 'product.reviews', ReviewController::class );
    });
});
