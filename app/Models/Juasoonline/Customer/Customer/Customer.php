<?php

namespace App\Models\Juasoonline\Customer\Customer;

use App\Models\Business\Product\Faq\Faq;
use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Address\Address;
use App\Models\Juasoonline\Customer\Wishlist\Wishlist;
use App\Models\Juasoonline\Customer\Cart\Cart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : string { return 'resource_id'; }

    /**
     * @return HasMany
     */
    public function addresses(): HasMany
    {
        return $this -> hasMany( Address::class );
    }

    /**
     * @return HasMany
     */
    public function wishlists(): HasMany
    {
        return $this -> hasMany( Wishlist::class );
    }

    /**
     * @return HasMany
     */
    public function carts(): HasMany
    {
        return $this -> hasMany( Cart::class );
    }

    /**
     * @return BelongsToMany
     */
    public function stores(): BelongsToMany
    {
        return $this -> belongsToMany( Store::class );
    }

    /**
     * @return BelongsTo
     */
    public function follow(): BelongsTo
    {
        return $this -> belongsTo( Store::class, 'store_id', 'id' );
    }

    /**
     * @return HasMany
     */
    public function faqs() : HasMany
    {
        return $this -> hasMany( Faq::class );
    }
}
