<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 18,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-06-01 15:15:38',
            'promo_end' => '2021-06-10 15:15:38',

            'status' => 1,

            'promo_type_id' => 3,
            'product_id' => 20,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
