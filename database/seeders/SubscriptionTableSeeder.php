<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'subscriptions' ) -> insert(
        [
            "resource_id"                   => "5487523045294",

            "subscription"                  => "Standard",
            "description"                   => "Here are the types of companies that may benefit a lot from building a custom gateway",

            "created_at"                    => date("Y-m-d H:i:s"),
            "updated_at"                    => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subscriptions' ) -> insert(
        [
            "resource_id"                   => "5487523000294",

            "subscription"                  => "Premium",
            "description"                   => "Here are the types of companies that may benefit a lot from building a custom gateway",

            "created_at"                    => date("Y-m-d H:i:s"),
            "updated_at"                    => date("Y-m-d H:i:s"),
        ]);
    }
}
