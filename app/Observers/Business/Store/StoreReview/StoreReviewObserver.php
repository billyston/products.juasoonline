<?php

namespace App\Observers\Business\Store\StoreReview;

use App\Models\Business\Store\StoreReview\StoreReview;

class StoreReviewObserver
{
    /**
     * @param StoreReview $review
     */
    public function creating(StoreReview $review )
    {
        $review -> resource_id = uniqid();
    }
}
