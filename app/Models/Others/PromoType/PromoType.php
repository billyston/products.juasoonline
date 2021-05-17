<?php

namespace App\Models\Others\PromoType;

use App\Models\Product\Promotion\Promotion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PromoType extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : String { return 'resource_id'; }

    /**
     * @return HasMany
     */
    public function promotions() : HasMany
    {
        return $this -> hasMany( Promotion::class );
    }
}
