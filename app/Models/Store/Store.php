<?php

namespace App\Models\Store;

use App\Models\Store\Branch\Branch;
use App\Models\Product\Product;
use App\Models\Store\StoreAdministrator\StoreAdministrator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : string { return 'resource_id'; }

    /**
     * @return HasOne
     */
    public function administrator() : HasOne
    {
        return $this -> hasOne( StoreAdministrator::class );
    }

    /**
     * @return HasMany
     */
    public function branches() : HasMany
    {
        return $this -> hasMany( Branch::class );
    }

    /**
     * @return HasMany
     */
    public function products() : HasMany
    {
        return $this -> hasMany( Product::class );
    }
}
