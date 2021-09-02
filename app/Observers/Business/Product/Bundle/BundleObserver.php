<?php

namespace App\Observers\Business\Product\Bundle;

use App\Models\Business\Product\Bundle\Bundle;

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
