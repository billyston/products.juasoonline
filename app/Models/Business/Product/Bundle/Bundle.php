<?php

namespace App\Models\Business\Product\Bundle;

use App\Models\Business\Product\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bundle extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName (): string { return 'resource_id'; }

    /**
     * @return BelongsTo
     */
    public function product() : BelongsTo
    {
        return $this -> belongsTo( Product::class );
    }

    /**
     * @return BelongsTo
     */
    public function currentProduct() : BelongsTo
    {
        return $this -> product() -> limit( 1 );
    }
}
