<?php

namespace App\Observers\Product\Size;

use App\Models\Product\Size\Size;

class SizeObserver
{
    /**
     * @param Size $size
     */
    public function creating( Size $size )
    {
        $size -> resource_id = uniqid();
    }
}
