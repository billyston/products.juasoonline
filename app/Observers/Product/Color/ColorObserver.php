<?php

namespace App\Observers\Product\Color;

use App\Models\Product\Color\Color;

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
