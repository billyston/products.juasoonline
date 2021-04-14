<?php

namespace App\Observers\Store\StoreAdministrator;

use App\Models\Store\StoreAdministrator\StoreAdministrator;

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
