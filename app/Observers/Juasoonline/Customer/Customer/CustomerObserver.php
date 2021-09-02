<?php

namespace App\Observers\Juasoonline\Customer\Customer;

use App\Models\Juasoonline\Customer\Customer\Customer;

class CustomerObserver
{
    /**
     * @param Customer $customer
     */
    public function creating( Customer $customer )
    {
        $customer -> resource_id = uniqid();
    }
}
