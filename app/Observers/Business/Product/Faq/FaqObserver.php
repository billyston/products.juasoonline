<?php

namespace App\Observers\Business\Product\Faq;

use App\Models\Business\Product\Faq\Faq;

class FaqObserver
{
    /**
     * @param Faq $faq
     */
    public function creating( Faq $faq )
    {
        $faq -> resource_id = uniqid();
    }
}
