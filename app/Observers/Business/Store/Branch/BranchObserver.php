<?php

namespace App\Observers\Business\Store\Branch;

use App\Models\Business\Store\Branch\Branch;

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
