<?php

namespace App\Models\Others\Group;

use App\Models\Others\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName (){ return 'resource_id'; }

    /**
     * @return HasMany
     */
    public function category() : HasMany
    {
        return $this -> hasMany( Category::class );
    }
}
