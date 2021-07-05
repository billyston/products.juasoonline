<?php

namespace App\Observers\Product\Bundle;

use App\Models\Product\Bundle\Bundle;

class BundleObserver
{
    /**
     * @param Bundle $bundle
     */
    public function creating( Bundle $bundle )
    {
        $bundle -> resource_id = uniqid();
    }
}
