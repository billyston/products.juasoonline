<?php

namespace App\Observers\Specification;

use App\Models\Specification\Specification;

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
