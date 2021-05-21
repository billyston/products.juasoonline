<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product 1 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors1_1.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors1_2.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors1_3.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 2 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors2_1.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors2_2.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors2_3.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 3 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors3_1.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors3_2.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors3_3.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 4 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors4_1.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors4_2.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors4_3.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 5 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors5_1.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors5_2.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors5_3.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 6 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors6_1.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors6_2.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors6_3.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 7 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors7_1.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors7_2.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors7_3.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 8 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors8_1.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors8_2.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors8_3.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 9 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors9_1.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors9_2.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors9_3.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 10 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors10_1.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors10_2.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors10_3.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 11 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors11_1.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors11_2.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors11_3.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 12 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors12_1.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors12_2.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors12_3.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 13 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors13_1.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors13_2.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors13_3.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 14 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors14_1.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors14_2.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors14_3.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 15 colors
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color one",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors15_1.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color two",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors15_2.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'colors' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "color"             =>  "Product 1 color three",
            "image"             =>  "https://assets.juasoonline.com/test/images/colors/colors15_3.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
