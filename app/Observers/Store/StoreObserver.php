<?php

namespace App\Observers\Store;

use App\Models\Store\Store;

class StoreObserver
{
    /**
     * @param Store $store
     */
    public function creating( Store $store )
    {
        $store -> resource_id = uniqid();
    }
}
