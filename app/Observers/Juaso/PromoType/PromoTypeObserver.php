<?php

namespace App\Observers\Juaso\PromoType;

use App\Models\Juaso\PromoType\PromoType;

class PromoTypeObserver
{
    /**
     * @param PromoType $promoType
     */
    public function creating( PromoType $promoType )
    {
        $promoType -> resource_id = uniqid();
    }
}
