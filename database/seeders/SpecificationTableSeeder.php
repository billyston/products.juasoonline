<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product 1 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 2 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 3 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  3,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 4 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  4,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 5 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  5,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 6 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  6,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 7 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  7,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 8 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  8,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 9 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  9,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 10 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  10,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 11 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  11,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 12 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  12,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 13 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  13,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 14 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  14,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        // Product 15 specifications
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Height",
            "value"             =>  "6.8",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Doors",
            "value"             =>  "Double Door",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'specifications' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "specification"     =>  "Type",
            "value"             =>  "Deep Freezer",

            "product_id"        =>  15,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
