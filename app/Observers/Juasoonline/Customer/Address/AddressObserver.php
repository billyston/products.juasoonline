<?php

namespace App\Observers\Juasoonline\Customer\Address;

use App\Models\Juasoonline\Customer\Address\Address;

class AddressObserver
{
    /**
     * @param Address $address
     */
    public function creating( Address $address )
    {
        $address -> resource_id = uniqid();
    }
}
