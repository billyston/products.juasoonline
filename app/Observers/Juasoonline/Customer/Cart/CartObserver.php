<?php

namespace App\Observers\Juasoonline\Customer\Cart;

use App\Models\Juasoonline\Customer\Cart\Cart;

class CartObserver
{
    /**
     * @param Cart $cart
     */
    public function creating(Cart $cart )
    {
        $cart -> resource_id = uniqid();
    }
}
