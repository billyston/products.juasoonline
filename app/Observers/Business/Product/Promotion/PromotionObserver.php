<?php

namespace App\Observers\Business\Product\Promotion;

use App\Models\Business\Product\Promotion\Promotion;

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
