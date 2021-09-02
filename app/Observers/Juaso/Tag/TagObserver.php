<?php

namespace App\Observers\Juaso\Tag;

use App\Models\Juaso\Tag\Tag;

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
