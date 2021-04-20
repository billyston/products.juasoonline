<?php

namespace App\Observers\Others\Subcategory;

use App\Models\Others\Subcategory\Subcategory;
use Illuminate\Support\Str;

class SubcategoryObserver
{
    /**
     * @param Subcategory $subcategory
     */
    public function creating( Subcategory $subcategory )
    {
        $subcategory -> resource_id = uniqid();
        $subcategory -> slug = Str::slug( $subcategory -> name );
    }
}
