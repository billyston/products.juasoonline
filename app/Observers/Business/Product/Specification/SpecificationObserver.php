<?php

namespace App\Observers\Business\Product\Specification;

use App\Models\Business\Product\Specification\Specification;

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
