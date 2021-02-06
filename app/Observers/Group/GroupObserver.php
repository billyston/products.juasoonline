<?php

namespace App\Observers\Group;

use App\Models\Group\Group;
use Illuminate\Support\Str;

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
