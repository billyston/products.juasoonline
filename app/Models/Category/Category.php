<?php

namespace App\Models\Category;

use App\Models\Group\Group;
use App\Models\Subcategory\Subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static paginate(int $int)
 */
class Category extends Model
{
    use HasFactory;

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
