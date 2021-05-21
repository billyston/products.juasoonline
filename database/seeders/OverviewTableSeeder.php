<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OverviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product 1 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews1_1.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews1_2.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews1_3.jpg",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 2 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews2_1.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews2_2.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews2_3.jpg",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 3 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews3_1.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews3_2.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews3_3.jpg",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 4 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews4_1.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews4_2.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews4_3.jpg",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 5 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews5_1.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews5_2.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews5_3.jpg",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 6 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews6_1.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews6_2.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews6_3.jpg",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 7 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews7_1.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews7_2.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews7_3.jpg",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 8 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews8_1.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews8_2.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews8_3.jpg",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 9 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews9_1.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews9_2.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews9_3.jpg",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 10 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews10_1.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews10_2.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews10_3.jpg",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 11 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews11_1.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews11_2.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews11_3.jpg",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 12 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews12_1.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews12_2.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews12_3.jpg",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 13 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews13_1.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews13_2.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews13_3.jpg",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 14 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews14_1.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews14_2.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews14_3.jpg",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 15 overviews
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title one",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews15_1.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title two",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews15_2.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'overviews' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "title"             =>  "Product 1 overview title three",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",
            "image"             =>  "https://assets.juasoonline.com/test/images/overviews/overviews15_3.jpg",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
