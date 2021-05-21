<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product 1 categories
        DB::table( 'product_subcategory' ) -> insert(
        [
            "product_id"        =>  1,
            "subcategory_id"    =>  76,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'product_subcategory' ) -> insert(
        [
            "product_id"        =>  1,
            "subcategory_id"    =>  77,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'product_subcategory' ) -> insert(
        [
            "product_id"        =>  1,
            "subcategory_id"    =>  78,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 2 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  2,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  2,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  2,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 3 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  3,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  3,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  3,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 4 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  4,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  4,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  4,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 5 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  5,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  5,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  5,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 6 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  6,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  6,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  6,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 7 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  7,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  7,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  7,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 8 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  8,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  8,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  8,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 9 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  9,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  9,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  9,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 10 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  10,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  10,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  10,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 11 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  11,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  11,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  11,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 12 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  12,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  12,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  12,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 13 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  13,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  13,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  13,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 14 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  14,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  14,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  14,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);

        // Product 15 categories
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  15,
                "subcategory_id"    =>  76,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  15,
                "subcategory_id"    =>  77,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
        DB::table( 'product_subcategory' ) -> insert(
            [
                "product_id"        =>  15,
                "subcategory_id"    =>  78,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
    }
}
