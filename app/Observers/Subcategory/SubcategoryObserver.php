<?php

namespace App\Observers\Subcategory;

use App\Models\Subcategory\Subcategory;

class SubcategoryObserver
{
    /**
     * @param Subcategory $subcategory
     */
    public function creating( Subcategory $subcategory )
    {
        $subcategory -> resource_id = uniqid();
    }
}
