<?php

namespace App\Providers;

use App\Models\Branch\Branch;
use App\Models\Category\Category;
use App\Models\File\File;
use App\Models\Group\Group;
use App\Models\Overview\Overview;
use App\Models\Review\Review;
use App\Models\Specification\Specification;
use App\Models\Store\Store;
use App\Models\StoreAdmin\StoreAdmin;
use App\Models\StoreAdministrator\StoreAdministrator;
use App\Models\Subcategory\Subcategory;
use App\Models\Product\Product;
use App\Observers\Branch\BranchObserver;
use App\Observers\Category\CategoryObserver;
use App\Observers\File\FileObserver;
use App\Observers\Group\GroupObserver;
use App\Observers\Overview\OverviewObserver;
use App\Observers\Review\ReviewObserver;
use App\Observers\Specification\SpecificationObserver;
use App\Observers\Store\StoreObserver;
use App\Observers\StoreAdministrator\StoreAdministratorObserver;
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
        Store::observe( StoreObserver::class );
        StoreAdministrator::observe( StoreAdministratorObserver::class );
        Branch::observe( BranchObserver::class );

        Group::observe( GroupObserver::class );
        Category::observe( CategoryObserver::class );
        Subcategory::observe( SubcategoryObserver::class );
        Product::observe( ProductObserver::class );
        File::observe( FileObserver::class );

        Specification::observe( SpecificationObserver::class );
        Review::observe( ReviewObserver::class );
        Overview::observe( OverviewObserver::class );
    }
}
