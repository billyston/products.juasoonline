<?php

namespace App\Observers\Review;

use App\Models\Review\Review;

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
