<?php

namespace App\Models\Product\Bundle;

use App\Models\Product\Product;
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
}
