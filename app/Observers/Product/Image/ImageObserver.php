<?php

namespace App\Observers\Product\Image;

use App\Models\Product\Image\Image;

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
