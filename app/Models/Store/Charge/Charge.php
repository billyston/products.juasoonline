<?php

namespace App\Models\Store\Charge;

use App\Models\Store\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Charge extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : string { return 'resource_id'; }

    /**
     * @return BelongsTo
     */
    public function store() : BelongsTo
    {
        return $this -> belongsTo( Store::class );
    }

    /**
     * @return HasMany
     */
    public function products() : HasMany
    {
        return $this -> hasMany( Store::class );
    }
}
