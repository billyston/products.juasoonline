<?php

namespace App\Observers\ProductImage;

use App\Models\ProductImage\ProductImage;

class ProductImageObserver
{
    /**
     * @param ProductImage $productImage
     */
    public function creating( ProductImage $productImage )
    {
        $productImage -> resource_id = uniqid();
    }
}
