<?php

namespace App\Observers\Category;

use App\Models\Category\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    /**
     * @param Category $category
     */
    public function creating( Category $category )
    {
        $category -> resource_id = uniqid();
        $category -> slug = Str::slug( $category -> name );
    }
}
