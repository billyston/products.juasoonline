<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product 1 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 2 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 3 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 4 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 5 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 6 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 7 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 8 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 9 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 10 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 11 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 12 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 13 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 14 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 15 sizes
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "S",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "M",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'sizes' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "size"              =>  "L",
            "description"       =>  "Apart from blogging, he likes to read Novels, Listening music and Net surfing.",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
