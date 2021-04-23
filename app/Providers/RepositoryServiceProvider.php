<?php

namespace App\Providers;

use App\Repositories\Others\Group\GroupRepositoryInterface;
use App\Repositories\Others\Group\GroupRepository;
use App\Repositories\Others\Category\CategoryRepositoryInterface;
use App\Repositories\Others\Category\CategoryRepository;
use App\Repositories\Others\Subcategory\SubcategoryRepositoryInterface;
use App\Repositories\Others\Subcategory\SubcategoryRepository;
use App\Repositories\Others\Brand\BrandRepository;
use App\Repositories\Others\Brand\BrandRepositoryInterface;

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
use App\Repositories\Product\Color\ColorRepository;
use App\Repositories\Product\Color\ColorRepositoryInterface;
use App\Repositories\Product\Size\SizeRepository;
use App\Repositories\Product\Size\SizeRepositoryInterface;

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
        $this -> app -> bind( BrandRepositoryInterface::class, BrandRepository::class );

        $this -> app -> bind( StoreRepositoryInterface::class, StoreRepository::class );
        $this -> app -> bind( StoreAdministratorRepositoryInterface::class, StoreAdministratorRepository::class );
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );

        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( ImageRepositoryInterface::class, ImageRepository::class );
        $this -> app -> bind( SpecificationRepositoryInterface::class, SpecificationRepository::class );
        $this -> app -> bind( OverviewRepositoryInterface::class, OverviewRepository::class );
        $this -> app -> bind( ReviewRepositoryInterface::class, ReviewRepository::class );
        $this -> app -> bind( ColorRepositoryInterface::class, ColorRepository::class );
        $this -> app -> bind( SizeRepositoryInterface::class, SizeRepository::class );
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
