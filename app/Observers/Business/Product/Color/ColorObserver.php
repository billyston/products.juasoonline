<?php

namespace App\Observers\Business\Product\Color;

use App\Models\Business\Product\Color\Color;

class ColorObserver
{
    /**
     * @param Color $color
     */
    public function creating( Color $color )
    {
        $color -> resource_id = uniqid();
    }
}
