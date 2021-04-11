<?php

namespace App\Models\Product;

use App\Models\Product\Overview\Overview;
use App\Models\Product\Image\Image;
use App\Models\Product\Review\Review;
use App\Models\Product\Specification\Specification;
use App\Models\Store\Store;
use App\Models\Subcategory\Subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static paginate( int $int )
 */

class Product extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : String { return 'resource_id'; }

    /**
     * @return BelongsTo
     */
    public function store() : BelongsTo
    {
        return $this -> belongsTo( Store::class );
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this -> belongsToMany( Subcategory::class );
    }

    /**
     * @return HasMany
     */
    public function specifications() : HasMany
    {
        return $this -> hasMany( Specification::class );
    }

    /**
     * @return HasMany
     */
    public function reviews() : HasMany
    {
        return $this -> hasMany( Review::class );
    }

    /**
     * @return HasMany
     */
    public function overviews() : HasMany
    {
        return $this -> hasMany( Overview::class );
    }

    /**
     * @return HasMany
     */
    public function images() : HasMany
    {
        return $this -> hasMany( Image::class );
    }
}
