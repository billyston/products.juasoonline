<?php

namespace App\Providers;

use App\Models\Category\Category;
use App\Models\Group\Group;
use App\Models\Subcategory\Subcategory;
use App\Models\Product\Product;
use App\Observers\Category\CategoryObserver;
use App\Observers\Group\GroupObserver;
use App\Observers\Subcategory\SubcategoryObserver;
use App\Observers\Product\ProductObserver;
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
        Group::observe( GroupObserver::class );
        Category::observe( CategoryObserver::class );
        Subcategory::observe( SubcategoryObserver::class );
        Product::observe( ProductObserver::class );
    }
}
