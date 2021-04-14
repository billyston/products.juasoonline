<?php

namespace App\Observers\Product\Review;

use App\Models\Product\Review\Review;

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
