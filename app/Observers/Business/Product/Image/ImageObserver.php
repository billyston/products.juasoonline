<?php

namespace App\Observers\Business\Product\Image;

use App\Models\Business\Product\Image\Image;

class ImageObserver
{
    /**
     * @param Image $productImage
     */
    public function creating( Image $productImage )
    {
        $productImage -> resource_id = uniqid();
    }
}
