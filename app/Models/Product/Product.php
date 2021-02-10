<?php

namespace App\Models\Product;

use App\Models\File\File;
use App\Models\Specification\Specification;
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
    public function subcategories(): BelongsToMany
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
    public function files() : HasMany
    {
        return $this -> hasMany( File::class );
    }
}
