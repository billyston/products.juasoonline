<?php

namespace App\Observers\Group;

use App\Models\Group\Group;

class GroupObserver
{
    /**
     * @param Group $group
     */
    public function creating( Group $group )
    {
        $group -> resource_id = uniqid();
    }
}
