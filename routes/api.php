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
    Route::group([ 'prefix' => 'stores' ], function()
    {
        Route::apiResource( '', StoreController::class, [ 'parameters' => [ '' => 'store' ]] );
        Route::apiResource( 'administrator', StoreAdministratorController::class, [ 'parameters' => [ 'administrator' => 'store_administrator' ]] );
        Route::apiResource( 'branches', BranchController::class );
    });

    Route::apiResource( 'groups', GroupController::class );
    Route::apiResource( 'categories', CategoryController::class );
    Route::apiResource( 'subcategories', SubcategoryController::class );

    Route::group([ 'prefix' => 'products' ], function()
    {
        Route::apiResource( '', ProductController::class, [ 'parameters' => [ '' => 'products' ]] );
        Route::apiResource( 'images', ProductImageController::class );
        Route::apiResource( 'specifications', SpecificationController::class );
        Route::apiResource( 'reviews', ReviewController::class );
        Route::apiResource( 'overviews', OverviewController::class );
    });
});
