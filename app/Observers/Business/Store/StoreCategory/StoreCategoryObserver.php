<?php

namespace App\Observers\Business\Store\StoreCategory;

use App\Models\Business\Store\StoreCategory\StoreCategory;
use Illuminate\Support\Str;

class StoreCategoryObserver
{
    /**
     * @param StoreCategory $productCategory
     */
    public function creating(StoreCategory $productCategory )
    {
        $productCategory -> resource_id = uniqid();
        $productCategory -> slug = Str::slug( $productCategory -> name );
    }
}
