<?php

namespace App\Observers\Business\Store\Store;

use App\Models\Business\Store\Store\Store;
use Illuminate\Support\Facades\DB;

class StoreObserver
{
    /**
     * @param Store $store
     */
    public function creating( Store $store )
    {
        $store -> resource_id = uniqid();
    }


    /**
     * @param Store $store
     */
    public function created( Store $store )
    {
        DB::table( 'charges' ) -> insert(['resource_id' =>  uniqid(), 'store_id' => $store -> id, 'name' => 'Monthly', 'fee' => 0.02, 'description' =>  '2 percent of the product sales price will be charged every month starting from the first month of which the product was created.', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]);
        DB::table( 'charges' ) -> insert(['resource_id' =>  uniqid(), 'store_id' => $store -> id, 'name' => 'Per Sales', 'fee' => 0.05, 'description' =>  '5 percent of the product sales price will be charged for each sales of the product.', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]);
    }
}
