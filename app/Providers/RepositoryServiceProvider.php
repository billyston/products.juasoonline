<?php

namespace App\Providers;

use App\Repositories\File\FileRepository;
use App\Repositories\File\FileRepositoryInterface;
use App\Repositories\Group\GroupRepositoryInterface;
use App\Repositories\Group\GroupRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Subcategory\SubcategoryRepositoryInterface;
use App\Repositories\Subcategory\SubcategoryRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this -> app -> bind( GroupRepositoryInterface::class, GroupRepository::class );
        $this -> app -> bind( CategoryRepositoryInterface::class, CategoryRepository::class );
        $this -> app -> bind( SubcategoryRepositoryInterface::class, SubcategoryRepository::class );
        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( FileRepositoryInterface::class, FileRepository::class );
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
