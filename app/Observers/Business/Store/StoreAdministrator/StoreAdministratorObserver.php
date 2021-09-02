<?php

namespace App\Observers\Business\Store\StoreAdministrator;

use App\Models\Business\Store\StoreAdministrator\StoreAdministrator;

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
