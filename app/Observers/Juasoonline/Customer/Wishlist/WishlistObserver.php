<?php

namespace App\Observers\Juasoonline\Customer\Wishlist;

use App\Models\Juasoonline\Customer\Wishlist\Wishlist;

class WishlistObserver
{
    /**
     * @param Wishlist $wishlist
     */
    public function creating(Wishlist $wishlist )
    {
        $wishlist -> resource_id = uniqid();
    }
}
