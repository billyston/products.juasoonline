<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product 1 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product1_1.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product1_2.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product1_3.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product1_4.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product1_5.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 2 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product2_1.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product2_2.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product2_3.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product2_4.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product2_5.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 3 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product3_1.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product3_2.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product3_3.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product3_4.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product3_5.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 4 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product4_1.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product4_2.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product4_3.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product4_4.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product4_5.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 5 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product5_1.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product5_2.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product5_3.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product5_4.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product5_5.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 6 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product6_1.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product6_2.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product6_3.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product6_4.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product6_5.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 7 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product7_1.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product7_2.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product7_3.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product7_4.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product7_5.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 8 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product8_1.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product8_2.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product8_3.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product8_4.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product8_5.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 9 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product9_1.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product9_2.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product9_3.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product9_4.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product9_5.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 10 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product10_1.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product10_2.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product10_3.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product10_4.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product10_5.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 11 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product11_1.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product11_2.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product11_3.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product11_4.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product11_5.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 12 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product12_1.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product12_2.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product12_3.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product12_4.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product12_5.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 13 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product13_1.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product13_2.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product13_3.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product13_4.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product13_5.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 14 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product14_1.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product14_2.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product14_3.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product14_4.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product14_5.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 15 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product15_1.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product15_2.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product15_3.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product15_4.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product15_5.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 16 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product16_1.jpg",

            "product_id"        =>  16,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product16_2.jpg",

            "product_id"        =>  16,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product16_3.jpg",

            "product_id"        =>  16,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product16_4.jpg",

            "product_id"        =>  16,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product16_5.jpg",

            "product_id"        =>  16,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 17 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product17_1.jpg",

            "product_id"        =>  17,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product17_2.jpg",

            "product_id"        =>  17,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product17_3.jpg",

            "product_id"        =>  17,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product17_4.jpg",

            "product_id"        =>  17,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product17_5.jpg",

            "product_id"        =>  17,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 18 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product18_1.jpg",

            "product_id"        =>  18,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product18_2.jpg",

            "product_id"        =>  18,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product18_3.jpg",

            "product_id"        =>  18,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product18_4.jpg",

            "product_id"        =>  18,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product18_5.jpg",

            "product_id"        =>  18,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 19 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product19_1.jpg",

            "product_id"        =>  19,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product19_2.jpg",

            "product_id"        =>  19,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product19_3.jpg",

            "product_id"        =>  19,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product19_4.jpg",

            "product_id"        =>  19,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product19_5.jpg",

            "product_id"        =>  19,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 20 images
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 1 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product20_1.jpg",

            "product_id"        =>  20,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 2 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product20_2.jpg",

            "product_id"        =>  20,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 3 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product20_3.jpg",

            "product_id"        =>  20,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 4 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product20_4.jpg",

            "product_id"        =>  20,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'images' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "description"       =>  "Image 5 description",
            "image"             =>  "https://assets.juasoonline.com/test/images/products/product20_5.jpg",

            "product_id"        =>  20,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
