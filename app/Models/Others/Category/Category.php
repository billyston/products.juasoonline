<?php

namespace App\Models\Others\Category;

use App\Models\Others\Group\Group;
use App\Models\Others\Subcategory\Subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static paginate(int $int)
 */
class Category extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName (){ return 'resource_id'; }

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
    public function subcategory() : HasMany
    {
        return $this -> hasMany( Subcategory::class );
    }
}
