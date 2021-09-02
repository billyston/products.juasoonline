<?php

namespace App\Observers\Business\Product\Size;

use App\Models\Business\Product\Size\Size;

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
