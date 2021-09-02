<?php

namespace App\Observers\Business\Product\Overview;

use App\Models\Business\Product\Overview\Overview;

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
