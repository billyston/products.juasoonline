<?php

namespace App\Observers\Business\Product\Review;

use App\Models\Business\Product\Review\Review;

class ReviewObserver
{
    /**
     * @param Review $review
     */
    public function creating( Review $review )
    {
        $review -> resource_id = uniqid();
    }
}
