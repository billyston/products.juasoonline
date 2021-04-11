<?php

namespace App\Observers\Product\Specification;

use App\Models\Product\Specification\Specification;

class SpecificationObserver
{
    /**
     * @param Specification $specification
     */
    public function creating( Specification $specification )
    {
        $specification -> resource_id = uniqid();
    }
}
