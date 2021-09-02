<?php

namespace App\Models\Business\Store\StoreSubcategory;

use App\Models\Business\Product\Product\Product;
use App\Models\Business\Store\StoreCategory\StoreCategory;
use App\Models\Juaso\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class StoreSubcategory extends Model
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
    public function category(): BelongsTo
    {
        return $this -> belongsTo( StoreCategory::class, 'store_category_id' );
    }

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this -> belongsToMany( Product::class );
    }
}
