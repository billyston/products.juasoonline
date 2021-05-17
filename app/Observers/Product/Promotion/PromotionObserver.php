<?php

namespace App\Observers\Product\Promotion;

use App\Models\Product\Promotion\Promotion;

class PromotionObserver
{
    /**
     * @param Promotion $promotion
     */
    public function creating( Promotion $promotion )
    {
        $promotion -> resource_id = uniqid();
    }
}
