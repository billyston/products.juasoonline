<?php

namespace App\Observers\Business\Store\StoreSubcategory;

use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;
use Illuminate\Support\Str;

class ProductSubcategoryObserver
{
    /**
     * @param StoreSubcategory $productSubcategory
     */
    public function creating(StoreSubcategory $productSubcategory )
    {
        $productSubcategory -> resource_id = uniqid();
        $productSubcategory -> slug = Str::slug( $productSubcategory -> name );
    }
}
