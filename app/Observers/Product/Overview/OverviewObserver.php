<?php

namespace App\Observers\Product\Overview;

use App\Models\Product\Overview\Overview;

class OverviewObserver
{
    /**
     * @param Overview $overview
     */
    public function creating( Overview $overview )
    {
        $overview -> resource_id = uniqid();
    }
}
