<?php

namespace App\Observers\Others\Brand;

use App\Models\Others\Brand\Brand;
use Illuminate\Support\Str;

class BrandObserver
{
    /**
     * @param Brand $brand
     */
    public function creating( Brand $brand )
    {
        $brand -> resource_id = uniqid();
    }
}
