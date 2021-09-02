<?php

namespace App\Models\Business\Product\Faq;

use App\Models\Business\Product\Product\Product;
use App\Models\Juasoonline\Customer\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faq extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'resource_id';
    }

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this -> belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this -> belongsTo(Customer::class);
    }
}
