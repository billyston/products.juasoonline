<?php

namespace App\Observers\Overview;

use App\Models\Overview\Overview;

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
