<?php

namespace App\Observers\Others\Tag;

use App\Models\Others\Tag\Tag;

class TagObserver
{
    /**
     * @param Tag $tag
     */
    public function creating( Tag $tag )
    {
        $tag -> resource_id = uniqid();
    }
}
