<?php

namespace App\Observers\Branch;

use App\Models\Branch\Branch;

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
