<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Dresses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Tees",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Blouses & Shirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Hoodies & Sweatshirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Women's Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Suits & Blazers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Bodysuits",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Tanks & Camis",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Coats & Jackets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Sweaters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Bikini Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Cover-Ups",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Leggings",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Skirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Shorts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Jeans",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Pants & Capris",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Wedding Dresses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Prom Dresses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Evening Dresses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Africa Clothing",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Cosplay Costumes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Pajama Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Bras",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Panties",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Women's Socks",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Bra & Brief Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Shapewear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Hair Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Sunglasses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Blue Light Blocking Glasses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Baseball Caps",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Bucket Hats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Belts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Hoodies & Sweatshirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "T-Shirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Shirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Casual Shorts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Men's Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Jackets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Casual Pants",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Sweatpants",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Cargo Pants",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Jeans",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Harem Pants",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Shorts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Jackets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Sweaters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Casual Faux Leather",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Genuine Leather",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Parkas",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Down Jackets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Suits & Blazer",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Boxers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Briefs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Long Johns",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Men's Sleep & Lounge",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Pajama Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Scarves",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Skullies & Beanies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Prescription Glasses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Gloves & Mittens",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Belts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Bomber Hats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Fedoras",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Berets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Baseball Caps",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  12,
            "name"              =>  "Cosplay Costumes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  12,
            "name"              =>  "Stage & Dance Wear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  12,
            "name"              =>  "Exotic Apparel",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "Android Phones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "iPhones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "Feature Phones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "Refurbished Phones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "8GB RAM",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "5G Phones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "lenovo",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "OnePlus",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Huawai",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Galaxy",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Meizu",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Umidifi",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Cases & Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Cables",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Chargers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Power Bank",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Holders & Stands",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Screen Protectors",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For iPhone",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Samsung",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Huawei",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Xiaomi",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Meizu",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For OPPO",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Wireless Chargers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Car Chargers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Lenses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Adapters & Converters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  18,
            "name"              =>  "Phone LCDs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  18,
            "name"              =>  "Phone Batteries",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  18,
            "name"              =>  "Housings & Frames",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  19,
            "name"              =>  "Walkie Talkie",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  19,
            "name"              =>  "Fiber Optic Equipment",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  19,
            "name"              =>  "Communications Antennas",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "CPUs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Motherboards",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Graphics Cards",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Mice",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Keyboards",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Keyboards",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Gaming Laptops",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Ultraslim Laptops",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Tablets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Laptop Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Tablet Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Laptop Bags & Cases",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Laptop Bags & Cases",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Surveillance Items",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Access Control Systems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Smoke Detectors",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Safety Equipment",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Alarms & Sensors",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Door Intercom Systems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "USB Flash Drives",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "Memory Cards",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "External Hard Drives",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "HDD Box Enclosures",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "SSDs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printer Parts & Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Printers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Printer Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Scanners",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Ink Cartridges",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printing Materials",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Wireless Routers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Network Cards",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "3G Modems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Modem-Router Combos",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Networking Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Cables & Adapters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Electronic Cigarettes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Batteries",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Chargers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Home Electronic Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Bags & Cases",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "Televisions",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "TV Receivers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "Projectors",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "Audio Amplifier Boards",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "TV Sticks",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Digital Cameras",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Camcorders",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Camera Drones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Action Cameras",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Photo Studio Supplies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Camera & Photo Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "Earphones & Headphones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "Speakers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "MP3 Players",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "Microphones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "VR/AR Devices",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Wearable Devices",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Home Appliances",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Wearable Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Remote Controls",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Wristbands",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Handheld Game Players",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Game Controllers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Joysticks",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Stickers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "925 Silver Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Diamond Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Pearl Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Gemstones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "K-Gold Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Fine Earrings",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Fine Jewelry Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Men's Fine Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  33,
            "name"              =>  "Bridal Jewelry Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  33,
            "name"              =>  "Engagement Rings",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  33,
            "name"              =>  "Wedding Hair Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Mechanical Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Quartz Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Digital Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Dual Display Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Sports Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Women's Bracelet Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Elegant Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Romantic Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Sports Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Innovative Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Necklaces & Pendants",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Trendy Rings",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Trendy Earrings",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Bracelets & Bangles",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Men's Cuff Links",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Fashion Jewelry Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Charms",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Body Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  37,
            "name"              =>  "Beads",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  37,
            "name"              =>  "Jewelry Findings & Components",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  37,
            "name"              =>  "Jewelry Packaging & Displays",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "Scrapbook & Stamping",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "Fabric & Sewing Supplies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "Needle Arts & Craft",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "5D DIY Diamond Painting",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  39,
            "name"              =>  "Dog Collars & Leads",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  39,
            "name"              =>  "Toys",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  39,
            "name"              =>  "Fish & Aquatic",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Cushion",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Curtains",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Bedding Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Beach Towels",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  41,
            "name"              =>  "Events & Parties",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  41,
            "name"              =>  "Artificial & Dried Flowers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  41,
            "name"              =>  "Gift Bags & Boxes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  42,
            "name"              =>  "Umbrellas",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  42,
            "name"              =>  "Bathroom Scales",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  42,
            "name"              =>  "Sweepers & Mops",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  43,
            "name"              =>  "Storage Boxes & Bins",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  43,
            "name"              =>  "Laundry Baskets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  43,
            "name"              =>  "Makeup Organizers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  44,
            "name"              =>  "Office Furniture",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  44,
            "name"              =>  "Home Furniture",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Bakeware",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Drinkware",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Kitchen Tools & Gadgets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Kitchen Knives & Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Painting & Calligraphy",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Wall Stickers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Figurines & Miniatures",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Wall Clocks",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  47,
            "name"              =>  "Watering & Irrigation Kits",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  47,
            "name"              =>  "Flower Pots & Planters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  47,
            "name"              =>  "Repellents",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  47,
            "name"              =>  "Outdoor Furniture",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Stylish Backpacks",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Totes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Shoulder Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Wallets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Evening Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Clutches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Women's Sandals",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Flats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "High Heels",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Vulcanized Sneakers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "House Slippers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Boots",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Men's Backpacks",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Crossbody Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Briefcases",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Luggage & Travel Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Wallets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Casual Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Vulcanized Sneakers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Men's Sandals",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Loafers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Flip Flops",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Boots",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Kids & Baby Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Cosmetic Bags & Cases",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Wallets & Card Holders",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Luggage Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Passport Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Bag Parts & Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Wedge Sandals",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Classic Heels",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Large-Sized Flats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Indoor Slippers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Trendy Sneakers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Comfortable Sandals",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Thermometers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Diaper Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Baby Teething Items",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Baby Strollers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Cloth Diapers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Blankets & Swaddling",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Backpacks & Carriers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Maternity Clothing",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Highchairs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Baby Cribs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Baby Rompers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Clothing Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Outerwear & Coats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Baby’s First Walkers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Sandals & Clogs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Dresses",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Clothing Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Tops & Tees",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Outerwear & Coats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Family Matching Outfits",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Sleepwear & Robes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Clothing Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "T-Shirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Outerwear & Coats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Jeans",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Hoodies & Sweatshirts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Sneakers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Sandals",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Boots",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Remote Control",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Outdoor Activities",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Action & Toy Figures",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Blocks",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Toys & Dolls",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "RC Helicopters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Stuffed & Plush Animals",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Diecasts & Toy Vehicles",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Building & Construction Toys",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Model Building Toys",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Stickers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Spinning Tops",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Movies & TV",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Playmats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Baby Rattles",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  60,
            "name"              =>  "Hats & Caps",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  60,
            "name"              =>  "Bibs & Burp Cloths",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  60,
            "name"              =>  "Headwear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Bikini Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "One-Piece Suits",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Two-Piece Suits",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Cover-Ups",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Men's Swimwear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Children's Swimwear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycles",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycle Frames",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycle Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycle Helmets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Cycling Jerseys",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Cycling Eyewear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Running Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Hiking Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Soccer Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Skateboarding Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Dance Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Basketball Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Reels",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Lures",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Lines",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Rods",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Rod Combos",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Tackle Boxes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Jerseys",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Hiking Jackets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Pants",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Shorts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Sports Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Sports Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Camping & Hiking",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Hunting",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Golf",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Fitness & Bodybuilding",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Skiing & Snowboarding",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Musical Instruments",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "Bundles With Closure",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "3/4 Bundles",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "Pre-Colored Weaves",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "Closures",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "Lace Front Wigs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "Full Lace Wigs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "360 Lace Wigs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "250% Density Lace Wigs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Synthetic Lace Wigs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Synthetic Weaves",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Hair Braids",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Synthetic Extensions",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Eyes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Lips",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Face",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Makeup Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Massage & Relaxation",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Household Health Monitors",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Chinese Medicine",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Personal Health Care",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Face",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Eyes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Body",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Skin Care Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Gel Nail Polish",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Nail Drills",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Nail Dryers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Nail Glitter",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  74,
            "name"              =>  "Hair Care & Styling",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  74,
            "name"              =>  "Shaving & Hair Removal",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  74,
            "name"              =>  "Oral Hygiene",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  75,
            "name"              =>  "Tattoo Kits",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  76,
            "name"              =>  "Condoms",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  76,
            "name"              =>  "Lubricants",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  76,
            "name"              =>  "Vibrators",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Car Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Interior Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Exterior Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Spark Plugs & Ignition Systems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Vehicle Sensors",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Brake Systems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Windshield Wipers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Other Replacement Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Code Readers & Scanning Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Diagnostic Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Car Washing Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Paint Care & Polishes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Other Maintenance Products",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Car Multimedia Players",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "DVR/Dash Cameras",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Alarm Systems & Security",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "GPS Trackers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Car Radios",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Car Monitors",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Car Fridges & Heaters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Vehicle Cameras",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Vehicle GPS Systems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Jump Starters",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  80,
            "name"              =>  "Car Stickers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  80,
            "name"              =>  "Car Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  80,
            "name"              =>  "Other Exterior Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Body & Frame Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Helmets & Protective Gear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Lighting",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Braking Systems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Exhaust Systems",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Helmets & Headsets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Motorcycle Seat Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Other Motorcycle Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Seat Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Storage Solutions",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Car Key Cases",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Steering Wheel Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Floor Mats",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Measurement & Analysis Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Hand Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Power Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Garden Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Tool Sets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Welding Equipment",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Welding & Soldering Supplies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Machine Tools & Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Woodworking Machinery",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Tool Storage Items",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Ceiling Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Pendant Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Downlights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Chandeliers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Wall Lamps",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Night Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Strips",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Downlights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Panel Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Spotlights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Bar Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Electrical Equipment & Supplies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Wall Switches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Hardware",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Kitchen Fixtures",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Paint Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Pumps",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Flashlights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Solar Lamps",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Floodlights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "String Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Underwater Lights",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}


