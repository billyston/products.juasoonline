<?php

namespace App\Models\Product;

use App\Models\Others\Brand\Brand;
use App\Models\Product\Color\Color;
use App\Models\Product\Overview\Overview;
use App\Models\Product\Image\Image;
use App\Models\Product\Promotion\Promotion;
use App\Models\Product\Review\Review;
use App\Models\Product\Size\Size;
use App\Models\Product\Specification\Specification;
use App\Models\Product\Tag\Tag;
use App\Models\Store\Charge\Charge;
use App\Models\Store\Store;
use App\Models\Others\Subcategory\Subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
     * @return BelongsTo
     */
    public function brand() : BelongsTo
    {
        return $this -> belongsTo( Brand::class );
    }

    /**
     * @return BelongsTo
     */
    public function charge() : BelongsTo
    {
        return $this -> belongsTo( Charge::class );
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this -> belongsToMany( Subcategory::class );
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this -> belongsToMany( Tag::class );
    }

    /**
     * @return HasMany
     */
    public function images() : HasMany
    {
        return $this -> hasMany( Image::class );
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
    public function colors() : HasMany
    {
        return $this -> hasMany( Color::class );
    }

    /**
     * @return HasMany
     */
    public function sizes() : HasMany
    {
        return $this -> hasMany( Size::class );
    }

    /**
     * @return HasMany
     */
    public function promotions() : HasMany
    {
        return $this -> hasMany( Promotion::class );
    }
}
