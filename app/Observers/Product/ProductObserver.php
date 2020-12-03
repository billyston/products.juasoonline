<?php

namespace App\Observers\Product;

use App\Models\Product\Product;

class ProductObserver
{
    /**
     * @param Product $product
     */
    public function creating( Product $product )
    {
        $product -> resource_id = uniqid();
    }
}
