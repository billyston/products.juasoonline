<?php

namespace App\Models\Juaso\Category;

use App\Models\Juaso\Group\Group;
use App\Models\Juaso\Subcategory\Subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static paginate( int $int )
 */
class Category extends Model
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
    public function group(): BelongsTo
    {
        return $this -> belongsTo( Group::class );
    }

    /**
     * @return HasMany
     */
    public function subcategories() : HasMany
    {
        return $this -> hasMany( Subcategory::class );
    }
}
