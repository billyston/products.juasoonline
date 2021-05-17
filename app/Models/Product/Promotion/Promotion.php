<?php

namespace App\Models\Product\Promotion;

use App\Models\Others\PromoType\PromoType;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promotion extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : String { return 'resource_id'; }

    /**
     * @return BelongsTo
     */
    public function promo_type() : BelongsTo
    {
        return $this -> belongsTo( PromoType::class );
    }
    /**
     * @return BelongsTo
     */
    public function product() : BelongsTo
    {
        return $this -> belongsTo( Product::class );
    }
}
