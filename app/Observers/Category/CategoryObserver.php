<?php

namespace App\Observers\Category;

use App\Models\Category\Category;

class CategoryObserver
{
    /**
     * @param Category $category
     */
    public function creating( Category $category )
    {
        $category -> resource_id = uniqid();
    }
}
