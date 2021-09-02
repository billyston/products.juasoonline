<?php

namespace App\Observers\Juaso\Brand;

use App\Models\Juaso\Brand\Brand;

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
