<?php

namespace App\Observers\Store\Branch;

use App\Models\Store\Branch\Branch;

class BranchObserver
{
    /**
     * @param Branch $branch
     */
    public function creating( Branch $branch )
    {
        $branch -> resource_id = uniqid();
    }
}
