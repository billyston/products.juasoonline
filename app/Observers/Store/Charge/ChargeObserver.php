<?php

namespace App\Observers\Store\Charge;

use App\Models\Store\Charge\Charge;

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
