<?php

namespace App\Observers\Others\PromoType;

use App\Models\Others\PromoType\PromoType;

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
