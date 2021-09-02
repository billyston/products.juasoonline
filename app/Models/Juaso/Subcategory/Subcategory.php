<?php

namespace App\Models\Juaso\Subcategory;

use App\Models\Juaso\Category\Category;
use App\Models\Business\Product\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use HasFactory; use SoftDeletes;

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
        return $this -> belongsTo( Category::class );
    }

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this -> belongsToMany( Product::class );
    }
}
