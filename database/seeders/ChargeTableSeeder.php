<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChargeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'charges' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Monthly",
            "fee"               =>  "0.5",
            "description"       =>  "2 percent of the product sales price will be charged every month starting from the first month of which the product was created.",

            "store_id"          =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
