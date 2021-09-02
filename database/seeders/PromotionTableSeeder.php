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
        // Product ads
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 18,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            'status' => "000",

            'promo_type_id' => 3,
            'product_id' => 20,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Slider ads
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            "image"             =>  "https://assets.juasoonline.com/test/images/sliders/1.jpg",

            'status' => "000",

            'promo_type_id' => 2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            "image"             =>  "https://assets.juasoonline.com/test/images/sliders/2.jpg",

            'status' => "000",

            'promo_type_id' => 2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'promotions' ) -> insert([
            "resource_id"       =>  uniqid(),

            'promo_start' => '2021-09-01 15:15:38',
            'promo_end' => '2021-12-10 15:15:38',

            "image"             =>  "https://assets.juasoonline.com/test/images/sliders/3.jpg",

            'status' => "000",

            'promo_type_id' => 2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
