<?php

namespace App\Providers;

use App\Models\Group\Group;
use App\Observers\Group\GroupObserver;
use App\Models\Category\Category;
use App\Observers\Category\CategoryObserver;
use App\Models\Subcategory\Subcategory;
use App\Observers\Subcategory\SubcategoryObserver;

use App\Models\Store\Store;
use App\Observers\Store\StoreObserver;
use App\Models\Store\StoreAdministrator\StoreAdministrator;
use App\Observers\Store\StoreAdministrator\StoreAdministratorObserver;
use App\Models\Store\Branch\Branch;
use App\Observers\Store\Branch\BranchObserver;

use App\Models\Product\Product;
use App\Observers\Product\ProductObserver;
use App\Models\Product\Image\Image;
use App\Observers\Product\Image\ImageObserver;
use App\Models\Product\Specification\Specification;
use App\Observers\Product\Specification\SpecificationObserver;
use App\Models\Product\Overview\Overview;
use App\Observers\Product\Overview\OverviewObserver;
use App\Models\Product\Review\Review;
use App\Observers\Product\Review\ReviewObserver;

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

        Store::observe( StoreObserver::class );
        StoreAdministrator::observe( StoreAdministratorObserver::class );
        Branch::observe( BranchObserver::class );

        Product::observe( ProductObserver::class );
        Image::observe( ImageObserver::class );
        Specification::observe( SpecificationObserver::class );
        Overview::observe( OverviewObserver::class );
        Review::observe( ReviewObserver::class );
    }
}
