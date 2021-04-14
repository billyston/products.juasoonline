<?php

namespace App\Providers;

use App\Repositories\Group\GroupRepositoryInterface;
use App\Repositories\Group\GroupRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Subcategory\SubcategoryRepositoryInterface;
use App\Repositories\Subcategory\SubcategoryRepository;

use App\Repositories\Store\StoreRepository;
use App\Repositories\Store\StoreRepositoryInterface;
use App\Repositories\Store\StoreAdministrator\StoreAdministratorRepository;
use App\Repositories\Store\StoreAdministrator\StoreAdministratorRepositoryInterface;
use App\Repositories\Store\Branch\BranchRepository;
use App\Repositories\Store\Branch\BranchRepositoryInterface;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\Image\ImageRepository;
use App\Repositories\Product\Image\ImageRepositoryInterface;
use App\Repositories\Product\Specification\SpecificationRepository;
use App\Repositories\Product\Specification\SpecificationRepositoryInterface;
use App\Repositories\Product\Overview\OverviewRepository;
use App\Repositories\Product\Overview\OverviewRepositoryInterface;
use App\Repositories\Product\Review\ReviewRepository;
use App\Repositories\Product\Review\ReviewRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    public function register()
    {
        $this -> app -> bind( GroupRepositoryInterface::class, GroupRepository::class );
        $this -> app -> bind( CategoryRepositoryInterface::class, CategoryRepository::class );
        $this -> app -> bind( SubcategoryRepositoryInterface::class, SubcategoryRepository::class );

        $this -> app -> bind( StoreRepositoryInterface::class, StoreRepository::class );
        $this -> app -> bind( StoreAdministratorRepositoryInterface::class, StoreAdministratorRepository::class );
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );

        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( ImageRepositoryInterface::class, ImageRepository::class );
        $this -> app -> bind( SpecificationRepositoryInterface::class, SpecificationRepository::class );
        $this -> app -> bind( OverviewRepositoryInterface::class, OverviewRepository::class );
        $this -> app -> bind( ReviewRepositoryInterface::class, ReviewRepository::class );
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
