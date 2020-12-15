<?php

namespace App\Models\Product;

use App\Models\Subcategory\Subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static paginate( int $int )
 */

class Product extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName (){ return 'resource_id'; }

    /**
     * @return BelongsToMany
     */
    public function subcategory(): BelongsToMany
    {
        return $this -> belongsToMany( Subcategory::class );
    }
}
