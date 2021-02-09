<?php

namespace App\Observers\StoreAdministrator;

use App\Models\StoreAdministrator\StoreAdministrator;

class StoreAdministratorObserver
{
    /**
     * @param StoreAdministrator $storeAdministrator
     */
    public function creating( StoreAdministrator $storeAdministrator )
    {
        $storeAdministrator -> resource_id = uniqid();
    }
}
