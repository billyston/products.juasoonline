<?php

namespace App\Observers\Business\Store\Charge;

use App\Models\Business\Store\Charge\Charge;

class ChargeObserver
{
    /**
     * @param Charge $charge
     */
    public function creating( Charge $charge )
    {
        $charge -> resource_id = uniqid();
    }
}
