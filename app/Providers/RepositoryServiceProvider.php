<?php

namespace App\Providers;

use App\Repositories\Juasoonline\JuasoonlineRepository;
use App\Repositories\Juasoonline\JuasoonlineRepositoryInterface;
use App\Repositories\Others\Country\CountryRepositoryInterface;
use App\Repositories\Others\Country\CountryRepository;
use App\Repositories\Others\PromoType\PromoTypeRepositoryInterface;
use App\Repositories\Others\PromoType\PromoTypeRepository;
use App\Repositories\Others\Group\GroupRepositoryInterface;
use App\Repositories\Others\Group\GroupRepository;
use App\Repositories\Others\Category\CategoryRepositoryInterface;
use App\Repositories\Others\Category\CategoryRepository;
use App\Repositories\Others\Subcategory\SubcategoryRepositoryInterface;
use App\Repositories\Others\Subcategory\SubcategoryRepository;
use App\Repositories\Others\Brand\BrandRepository;
use App\Repositories\Others\Brand\BrandRepositoryInterface;

use App\Repositories\Product\Bundle\BundleRepository;
use App\Repositories\Product\Bundle\BundleRepositoryInterface;
use App\Repositories\Store\StoreRepositoryInterface;
use App\Repositories\Store\StoreRepository;
use App\Repositories\Store\StoreAdministrator\StoreAdministratorRepositoryInterface;
use App\Repositories\Store\StoreAdministrator\StoreAdministratorRepository;
use App\Repositories\Store\Branch\BranchRepositoryInterface;
use App\Repositories\Store\Branch\BranchRepository;
use App\Repositories\Store\Charge\ChargeRepositoryInterface;
use App\Repositories\Store\Charge\ChargeRepository;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\Image\ImageRepositoryInterface;
use App\Repositories\Product\Image\ImageRepository;
use App\Repositories\Product\Specification\SpecificationRepositoryInterface;
use App\Repositories\Product\Specification\SpecificationRepository;
use App\Repositories\Product\Overview\OverviewRepositoryInterface;
use App\Repositories\Product\Overview\OverviewRepository;
use App\Repositories\Product\Review\ReviewRepositoryInterface;
use App\Repositories\Product\Review\ReviewRepository;
use App\Repositories\Product\Color\ColorRepositoryInterface;
use App\Repositories\Product\Color\ColorRepository;
use App\Repositories\Product\Size\SizeRepositoryInterface;
use App\Repositories\Product\Size\SizeRepository;
use App\Repositories\Product\Promotion\PromotionRepositoryInterface;
use App\Repositories\Product\Promotion\PromotionRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    public function register()
    {
        $this -> app -> bind( CountryRepositoryInterface::class, CountryRepository::class );
        $this -> app -> bind( PromoTypeRepositoryInterface::class, PromoTypeRepository::class );
        $this -> app -> bind( GroupRepositoryInterface::class, GroupRepository::class );
        $this -> app -> bind( CategoryRepositoryInterface::class, CategoryRepository::class );
        $this -> app -> bind( SubcategoryRepositoryInterface::class, SubcategoryRepository::class );
        $this -> app -> bind( BrandRepositoryInterface::class, BrandRepository::class );

        $this -> app -> bind( StoreRepositoryInterface::class, StoreRepository::class );
        $this -> app -> bind( StoreAdministratorRepositoryInterface::class, StoreAdministratorRepository::class );
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );
        $this -> app -> bind( ChargeRepositoryInterface::class, ChargeRepository::class );

        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( ImageRepositoryInterface::class, ImageRepository::class );
        $this -> app -> bind( SpecificationRepositoryInterface::class, SpecificationRepository::class );
        $this -> app -> bind( OverviewRepositoryInterface::class, OverviewRepository::class );
        $this -> app -> bind( ReviewRepositoryInterface::class, ReviewRepository::class );
        $this -> app -> bind( ColorRepositoryInterface::class, ColorRepository::class );
        $this -> app -> bind( SizeRepositoryInterface::class, SizeRepository::class );
        $this -> app -> bind( PromotionRepositoryInterface::class, PromotionRepository::class );
        $this -> app -> bind( BundleRepositoryInterface::class, BundleRepository::class );

        $this -> app -> bind( JuasoonlineRepositoryInterface::class, JuasoonlineRepository::class );
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
