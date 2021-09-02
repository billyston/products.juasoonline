<?php

namespace App\Models\Business\Store\StoreCategory;

use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;
use App\Models\Business\Store\Store\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StoreCategory extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : string { return 'resource_id'; }

    /**
     * @return BelongsTo
     */
    public function store() : BelongsTo
    {
        return $this -> belongsTo( Store::class );
    }

    /**
     * @return HasMany
     */
    public function subcategories() : HasMany
    {
        return $this -> hasMany( StoreSubcategory::class, 'store_category_id' );
    }
}
