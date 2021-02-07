<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            "name"              =>  "Wedding Dresses",
            "slug"              =>  Str::slug( 'Wedding Dresses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Prom Dresses",
            "slug"              =>  Str::slug( 'Prom Dresses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Evening Dresses",
            "slug"              =>  Str::slug( 'Evening Dresses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Africa Clothing",
            "slug"              =>  Str::slug( 'Africa Clothing', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  1,
            "name"              =>  "Cosplay Costumes",
            "slug"              =>  Str::slug( 'Cosplay Costumes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Pajama Sets",
            "slug"              =>  Str::slug( 'Pajama Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Bras",
            "slug"              =>  Str::slug( 'Bras', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Panties",
            "slug"              =>  Str::slug( 'Panties', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Women's Socks",
            "slug"              =>  Str::slug( 'Womens Socks', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Bra & Brief Sets",
            "slug"              =>  Str::slug( 'Bra and Brief Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  2,
            "name"              =>  "Shapewear",
            "slug"              =>  Str::slug( 'Shapewear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Hair Accessories",
            "slug"              =>  Str::slug( 'Hair Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Sunglasses",
            "slug"              =>  Str::slug( 'Sunglasses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Blue Light Blocking Glasses",
            "slug"              =>  Str::slug( 'Blue Light Blocking Glasses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Baseball Caps",
            "slug"              =>  Str::slug( 'Baseball Caps', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Bucket Hats",
            "slug"              =>  Str::slug( 'Bucket Hats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  3,
            "name"              =>  "Belts",
            "slug"              =>  Str::slug( 'Belts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Dresses",
            "slug"              =>  Str::slug( 'Dresses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Tees",
            "slug"              =>  Str::slug( 'Tees', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Blouses & Shirts",
            "slug"              =>  Str::slug( 'Blouses and Shirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Hoodies & Sweatshirts",
            "slug"              =>  Str::slug( 'Hoodies and Sweatshirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Women's Sets",
            "slug"              =>  Str::slug( 'Womens Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Suits & Blazers",
            "slug"              =>  Str::slug( 'Suits and Blazers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Bodysuits",
            "slug"              =>  Str::slug( 'Bodysuits', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Tanks & Camis",
            "slug"              =>  Str::slug( 'Tanks and Camis', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Coats & Jackets",
            "slug"              =>  Str::slug( 'Coats and Jackets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  4,
            "name"              =>  "Sweaters",
            "slug"              =>  Str::slug( 'Sweaters', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Leggings",
            "slug"              =>  Str::slug( 'Leggings', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Skirts",
            "slug"              =>  Str::slug( 'Skirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Shorts",
            "slug"              =>  Str::slug( 'Shorts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Jeans",
            "slug"              =>  Str::slug( 'Jeans', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  5,
            "name"              =>  "Pants & Capris",
            "slug"              =>  Str::slug( 'Pants and Capris', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Bikini Sets",
            "slug"              =>  Str::slug( 'Bikini Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  6,
            "name"              =>  "Cover-Ups",
            "slug"              =>  Str::slug( 'Cover-Ups', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Hoodies & Sweatshirts",
            "slug"              =>  Str::slug( 'Hoodies and Sweatshirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "T-Shirts",
            "slug"              =>  Str::slug( 'T-Shirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Shirts",
            "slug"              =>  Str::slug( 'Shirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Casual Shorts",
            "slug"              =>  Str::slug( 'Casual Shorts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Men's Sets",
            "slug"              =>  Str::slug( 'Mens Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  7,
            "name"              =>  "Jackets",
            "slug"              =>  Str::slug( 'Jackets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Casual Pants",
            "slug"              =>  Str::slug( 'Casual Pants', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Sweatpants",
            "slug"              =>  Str::slug( 'Sweatpants', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Cargo Pants",
            "slug"              =>  Str::slug( 'Cargo Pants', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Jeans",
            "slug"              =>  Str::slug( 'Jeans', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Harem Pants",
            "slug"              =>  Str::slug( 'Harem Pants', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  8,
            "name"              =>  "Shorts",
            "slug"              =>  Str::slug( 'Shorts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Boxers",
            "slug"              =>  Str::slug( 'Boxers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Briefs",
            "slug"              =>  Str::slug( 'Briefs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Long Johns",
            "slug"              =>  Str::slug( 'Long Johns', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Men's Sleep & Lounge",
            "slug"              =>  Str::slug( 'Mens Sleep and Lounge', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Pajama Sets",
            "slug"              =>  Str::slug( 'Pajama Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Jackets",
            "slug"              =>  Str::slug( 'Jackets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Sweaters",
            "slug"              =>  Str::slug( 'Sweaters', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Casual Faux Leather",
            "slug"              =>  Str::slug( 'Casual Faux Leather', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  9,
            "name"              =>  "Genuine Leather",
            "slug"              =>  Str::slug( 'Genuine Leather', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Parkas",
            "slug"              =>  Str::slug( 'Parkas', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Down Jackets",
            "slug"              =>  Str::slug( 'Down Jackets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  10,
            "name"              =>  "Suits & Blazer",
            "slug"              =>  Str::slug( 'Suits and Blazer', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Scarves",
            "slug"              =>  Str::slug( 'Scarves', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Skullies & Beanies",
            "slug"              =>  Str::slug( 'Skullies and Beanies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Prescription Glasses",
            "slug"              =>  Str::slug( 'Prescription Glasses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Gloves & Mittens",
            "slug"              =>  Str::slug( 'Gloves and Mittens', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Belts",
            "slug"              =>  Str::slug( 'Belts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Bomber Hats",
            "slug"              =>  Str::slug( 'Bomber Hats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Fedoras",
            "slug"              =>  Str::slug( 'Fedoras', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Berets",
            "slug"              =>  Str::slug( 'Berets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  11,
            "name"              =>  "Baseball Caps",
            "slug"              =>  Str::slug( 'Baseball Caps', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  12,
            "name"              =>  "Cosplay Costumes",
            "slug"              =>  Str::slug( 'Cosplay Costumes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  12,
            "name"              =>  "Stage & Dance Wear",
            "slug"              =>  Str::slug( 'Stage and Dance Wear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  12,
            "name"              =>  "Exotic Apparel",
            "slug"              =>  Str::slug( 'Exotic Apparel', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "Android Phones",
            "slug"              =>  Str::slug( 'Android Phones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "iPhones",
            "slug"              =>  Str::slug( 'iPhones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "Feature Phones",
            "slug"              =>  Str::slug( 'Feature Phones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "Refurbished Phones",
            "slug"              =>  Str::slug( 'Refurbished Phones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "8GB RAM",
            "slug"              =>  Str::slug( '8GB RAM', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  13,
            "name"              =>  "5G Phones",
            "slug"              =>  Str::slug( '5G Phones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "lenovo",
            "slug"              =>  Str::slug( 'lenovo', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "OnePlus",
            "slug"              =>  Str::slug( 'OnePlus', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Huawai",
            "slug"              =>  Str::slug( 'Huawai', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Galaxy",
            "slug"              =>  Str::slug( 'Galaxy', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Meizu",
            "slug"              =>  Str::slug( 'Meizu', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  14,
            "name"              =>  "Umidifi",
            "slug"              =>  Str::slug( 'Umidifi', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Cases & Covers",
            "slug"              =>  Str::slug( 'Cases and Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Cables",
            "slug"              =>  Str::slug( 'Cables', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Chargers",
            "slug"              =>  Str::slug( 'Chargers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Power Bank",
            "slug"              =>  Str::slug( 'Power Bank', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Holders & Stands",
            "slug"              =>  Str::slug( 'Holders and Stands', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  15,
            "name"              =>  "Screen Protectors",
            "slug"              =>  Str::slug( 'Screen Protectors', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For iPhone",
            "slug"              =>  Str::slug( 'Cases For iPhone', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Samsung",
            "slug"              =>  Str::slug( 'Cases For Samsung', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Huawei",
            "slug"              =>  Str::slug( 'Cases For Huawei', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Xiaomi",
            "slug"              =>  Str::slug( 'Cases For Xiaomi', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For Meizu",
            "slug"              =>  Str::slug( 'Cases For Meizu', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  16,
            "name"              =>  "Cases For OPPO",
            "slug"              =>  Str::slug( 'Cases For OPPO', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Wireless Chargers",
            "slug"              =>  Str::slug( 'Wireless Chargers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Car Chargers",
            "slug"              =>  Str::slug( 'Car Chargers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Lenses",
            "slug"              =>  Str::slug( 'Lenses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  17,
            "name"              =>  "Adapters & Converters",
            "slug"              =>  Str::slug( 'Adapters & Converters', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  18,
            "name"              =>  "Phone LCDs",
            "slug"              =>  Str::slug( 'Phone LCDs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  18,
            "name"              =>  "Phone Batteries",
            "slug"              =>  Str::slug( 'Phone Batteries', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  18,
            "name"              =>  "Housings & Frames",
            "slug"              =>  Str::slug( 'Housings and Frames', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  19,
            "name"              =>  "Walkie Talkie",
            "slug"              =>  Str::slug( 'Walkie Talkie', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  19,
            "name"              =>  "Fiber Optic Equipment",
            "slug"              =>  Str::slug( 'Fiber Optic Equipment', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  19,
            "name"              =>  "Communications Antennas",
            "slug"              =>  Str::slug( 'Communications Antennas', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "CPUs",
            "slug"              =>  Str::slug( 'CPUs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Motherboards",
            "slug"              =>  Str::slug( 'Motherboards', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Graphics Cards",
            "slug"              =>  Str::slug( 'Graphics Cards', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Mice",
            "slug"              =>  Str::slug( 'Mice', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  20,
            "name"              =>  "Keyboards",
            "slug"              =>  Str::slug( 'Keyboards', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "Gaming Laptops",
            "slug"              =>  Str::slug( 'Gaming Laptops', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "Ultraslim Laptops",
            "slug"              =>  Str::slug( 'Ultraslim Laptops', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "Tablets",
            "slug"              =>  Str::slug( 'Tablets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "Laptop Accessories",
            "slug"              =>  Str::slug( 'Laptop Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "Tablet Accessories",
            "slug"              =>  Str::slug( 'Tablet Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  23,
            "name"              =>  "Laptop Bags & Cases",
            "slug"              =>  Str::slug( 'Laptop Bag and Cases', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Surveillance Items",
            "slug"              =>  Str::slug( 'Surveillance Items', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Access Control Systems",
            "slug"              =>  Str::slug( 'Access Control Systems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Smoke Detectors",
            "slug"              =>  Str::slug( 'Smoke Detectors', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Safety Equipment",
            "slug"              =>  Str::slug( 'Safety Equipment', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Alarms & Sensors",
            "slug"              =>  Str::slug( 'Alarms & Sensors', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  25,
            "name"              =>  "Door Intercom Systems",
            "slug"              =>  Str::slug( 'Door Intercom Systems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "USB Flash Drives",
            "slug"              =>  Str::slug( 'USB Flash Drives', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "Memory Cards",
            "slug"              =>  Str::slug( 'Memory Cards', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "External Hard Drives",
            "slug"              =>  Str::slug( 'External Hard Drives', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "HDD Box Enclosures",
            "slug"              =>  Str::slug( 'HDD Box Enclosures', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  21,
            "name"              =>  "SSDs",
            "slug"              =>  Str::slug( 'SSDs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printers",
            "slug"              =>  Str::slug( '3D Printers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printer Parts & Accessories",
            "slug"              =>  Str::slug( '3D Printer Parts and Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printers",
            "slug"              =>  Str::slug( '3D Printers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Printers",
            "slug"              =>  Str::slug( 'Printers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Printer Parts",
            "slug"              =>  Str::slug( 'Printer Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Scanners",
            "slug"              =>  Str::slug( 'Scanners', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "Ink Cartridges",
            "slug"              =>  Str::slug( 'Ink Cartridges', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  24,
            "name"              =>  "3D Printing Materials",
            "slug"              =>  Str::slug( '3D Printing Materials', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Wireless Routers",
            "slug"              =>  Str::slug( 'Wireless Routers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Network Cards",
            "slug"              =>  Str::slug( 'Network Cards', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "3G Modems",
            "slug"              =>  Str::slug( '3G Modems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Modem-Router Combos",
            "slug"              =>  Str::slug( 'Modem Router Combos', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  22,
            "name"              =>  "Networking Tools",
            "slug"              =>  Str::slug( 'Networking Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Cables & Adapters",
            "slug"              =>  Str::slug( 'Cables and Adapters', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Electronic Cigarettes",
            "slug"              =>  Str::slug( 'Electronic Cigarettes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Batteries",
            "slug"              =>  Str::slug( 'Batteries', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Chargers",
            "slug"              =>  Str::slug( 'Chargers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Home Electronic Accessories",
            "slug"              =>  Str::slug( 'Home Electronic Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  26,
            "name"              =>  "Bags & Cases",
            "slug"              =>  Str::slug( 'Bags and Cases', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "Televisions",
            "slug"              =>  Str::slug( 'Televisions', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "TV Receivers",
            "slug"              =>  Str::slug( 'TV Receivers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "Projectors",
            "slug"              =>  Str::slug( 'Projectors', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "Audio Amplifier Boards",
            "slug"              =>  Str::slug( 'Audio Amplifier Boards', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  27,
            "name"              =>  "TV Sticks",
            "slug"              =>  Str::slug( 'TV Sticks', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Digital Cameras",
            "slug"              =>  Str::slug( 'Digital Cameras', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Camcorders",
            "slug"              =>  Str::slug( 'Camcorders', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Camera Drones",
            "slug"              =>  Str::slug( 'Camera Drones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Action Cameras",
            "slug"              =>  Str::slug( 'Action Cameras', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Photo Studio Supplies",
            "slug"              =>  Str::slug( 'Photo Studio Supplies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  28,
            "name"              =>  "Camera & Photo Accessories",
            "slug"              =>  Str::slug( 'Camera and Photo Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "Earphones & Headphones",
            "slug"              =>  Str::slug( 'Earphones and Headphones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "Speakers",
            "slug"              =>  Str::slug( 'Speakers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "MP3 Players",
            "slug"              =>  Str::slug( 'MP3 Players', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "Microphones",
            "slug"              =>  Str::slug( 'Microphones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  29,
            "name"              =>  "VR/AR Devices",
            "slug"              =>  Str::slug( 'VR AR Devices', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Wearable Devices",
            "slug"              =>  Str::slug( 'Wearable Devices', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Home Appliances",
            "slug"              =>  Str::slug( 'Smart Home Appliances', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Wearable Accessories",
            "slug"              =>  Str::slug( 'Smart Wearable Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Remote Controls",
            "slug"              =>  Str::slug( 'Smart Remote Controls', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Watches",
            "slug"              =>  Str::slug( 'Smart Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  30,
            "name"              =>  "Smart Wristbands",
            "slug"              =>  Str::slug( 'Smart Wristbands', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Handheld Game Players",
            "slug"              =>  Str::slug( 'Handheld Game Players', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Game Controllers",
            "slug"              =>  Str::slug( 'Game Controllers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Joysticks",
            "slug"              =>  Str::slug( 'Joysticks', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  31,
            "name"              =>  "Stickers",
            "slug"              =>  Str::slug( 'Stickers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "925 Silver Jewelry",
            "slug"              =>  Str::slug( '925 Silver Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Diamond Jewelry",
            "slug"              =>  Str::slug( 'Diamond Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Pearl Jewelry",
            "slug"              =>  Str::slug( 'Pearl Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Gemstones",
            "slug"              =>  Str::slug( 'Gemstones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "K-Gold Jewelry",
            "slug"              =>  Str::slug( 'K Gold Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Fine Earrings",
            "slug"              =>  Str::slug( 'Fine Earrings', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Fine Jewelry Sets",
            "slug"              =>  Str::slug( 'Fine Jewelry Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  35,
            "name"              =>  "Men's Fine Jewelry",
            "slug"              =>  Str::slug( 'Mens Fine Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  33,
            "name"              =>  "Bridal Jewelry Sets",
            "slug"              =>  Str::slug( 'Bridal Jewelry Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  33,
            "name"              =>  "Engagement Rings",
            "slug"              =>  Str::slug( 'Engagement Rings', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  33,
            "name"              =>  "Wedding Hair Jewelry",
            "slug"              =>  Str::slug( 'Wedding Hair Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Mechanical Watches",
            "slug"              =>  Str::slug( 'Mechanical Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Quartz Watches",
            "slug"              =>  Str::slug( 'Quartz Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Digital Watches",
            "slug"              =>  Str::slug( 'Digital Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Dual Display Watches",
            "slug"              =>  Str::slug( 'Dual Display Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  34,
            "name"              =>  "Sports Watches",
            "slug"              =>  Str::slug( 'Sports Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Women's Bracelet Watches",
            "slug"              =>  Str::slug( 'Womens Bracelet Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Elegant Watches",
            "slug"              =>  Str::slug( 'Elegant Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Romantic Watches",
            "slug"              =>  Str::slug( 'Romantic Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Sports Watches",
            "slug"              =>  Str::slug( 'Sports Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  32,
            "name"              =>  "Innovative Watches",
            "slug"              =>  Str::slug( 'Innovative Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Necklaces & Pendants",
            "slug"              =>  Str::slug( 'Necklaces and Pendants', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Trendy Rings",
            "slug"              =>  Str::slug( 'Trendy Rings', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Trendy Earrings",
            "slug"              =>  Str::slug( 'Trendy Earrings', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Bracelets & Bangles",
            "slug"              =>  Str::slug( 'Bracelets and Bangles', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Men's Cuff Links",
            "slug"              =>  Str::slug( 'Mens Cuff Links', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Fashion Jewelry Sets",
            "slug"              =>  Str::slug( 'Fashion Jewelry Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Charms",
            "slug"              =>  Str::slug( 'Charms', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  36,
            "name"              =>  "Body Jewelry",
            "slug"              =>  Str::slug( 'Body Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  37,
            "name"              =>  "Beads",
            "slug"              =>  Str::slug( 'Beads', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  37,
            "name"              =>  "Jewelry Findings & Components",
            "slug"              =>  Str::slug( 'Jewelry Findings and Components', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  37,
            "name"              =>  "Jewelry Packaging & Displays",
            "slug"              =>  Str::slug( 'Jewelry Packaging and Displays', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "Scrapbook & Stamping",
            "slug"              =>  Str::slug( 'Scrapbook and Stamping', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "Fabric & Sewing Supplies",
            "slug"              =>  Str::slug( 'Fabric and Sewing Supplies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "Needle Arts & Craft",
            "slug"              =>  Str::slug( 'Needle Arts and Craft', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  38,
            "name"              =>  "5D DIY Diamond Painting",
            "slug"              =>  Str::slug( '5D DIY Diamond Painting', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  44,
            "name"              =>  "Dog Collars & Leads",
            "slug"              =>  Str::slug( 'Dog Collars and Leads', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  44,
            "name"              =>  "Toys",
            "slug"              =>  Str::slug( 'Toys', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  44,
            "name"              =>  "Fish & Aquatic",
            "slug"              =>  Str::slug( 'Fish and Aquatic', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Cushion",
            "slug"              =>  Str::slug( 'Cushion', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Curtains",
            "slug"              =>  Str::slug( 'Curtains', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Bedding Sets",
            "slug"              =>  Str::slug( 'Bedding Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  40,
            "name"              =>  "Beach Towels",
            "slug"              =>  Str::slug( 'Beach Towels', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  41,
            "name"              =>  "Events & Parties",
            "slug"              =>  Str::slug( 'Events and Parties', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  41,
            "name"              =>  "Artificial & Dried Flowers",
            "slug"              =>  Str::slug( 'Artificial and Dried Flowers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  41,
            "name"              =>  "Gift Bags & Boxes",
            "slug"              =>  Str::slug( 'Gift Bags and Boxes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  42,
            "name"              =>  "Umbrellas",
            "slug"              =>  Str::slug( 'Umbrellas', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  42,
            "name"              =>  "Bathroom Scales",
            "slug"              =>  Str::slug( 'Bathroom Scales', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  42,
            "name"              =>  "Sweepers & Mops",
            "slug"              =>  Str::slug( 'Sweepers and Mops', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  43,
            "name"              =>  "Storage Boxes & Bins",
            "slug"              =>  Str::slug( 'Storage Boxes and Bins', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  43,
            "name"              =>  "Laundry Baskets",
            "slug"              =>  Str::slug( 'Laundry Baskets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  43,
            "name"              =>  "Makeup Organizers",
            "slug"              =>  Str::slug( 'Makeup Organizers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  47,
            "name"              =>  "Office Furniture",
            "slug"              =>  Str::slug( 'Office Furniture', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  47,
            "name"              =>  "Home Furniture",
            "slug"              =>  Str::slug( 'Home Furniture', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Bakeware",
            "slug"              =>  Str::slug( 'Bakeware', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Drinkware",
            "slug"              =>  Str::slug( 'Drinkware', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Kitchen Tools & Gadgets",
            "slug"              =>  Str::slug( 'Kitchen Tools and Gadgets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  45,
            "name"              =>  "Kitchen Knives & Accessories",
            "slug"              =>  Str::slug( 'Kitchen Knives and Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Painting & Calligraphy",
            "slug"              =>  Str::slug( 'Painting and Calligraphy', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Wall Stickers",
            "slug"              =>  Str::slug( 'Wall Stickers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Figurines & Miniatures",
            "slug"              =>  Str::slug( 'Figurines and Miniatures', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  46,
            "name"              =>  "Wall Clocks",
            "slug"              =>  Str::slug( 'Wall Clocks', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  39,
            "name"              =>  "Watering & Irrigation Kits",
            "slug"              =>  Str::slug( 'Watering and Irrigation Kits', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  39,
            "name"              =>  "Flower Pots & Planters",
            "slug"              =>  Str::slug( 'Flower Pots and Planters', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  39,
            "name"              =>  "Repellents",
            "slug"              =>  Str::slug( 'Repellents', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  39,
            "name"              =>  "Outdoor Furniture",
            "slug"              =>  Str::slug( 'Outdoor Furniture', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Stylish Backpacks",
            "slug"              =>  Str::slug( 'Stylish Backpacks', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Totes",
            "slug"              =>  Str::slug( 'Totes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Shoulder Bags",
            "slug"              =>  Str::slug( 'Shoulder Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Wallets",
            "slug"              =>  Str::slug( 'Wallets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Evening Bags",
            "slug"              =>  Str::slug( 'Evening Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  48,
            "name"              =>  "Clutches",
            "slug"              =>  Str::slug( 'Clutches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Women's Sandals",
            "slug"              =>  Str::slug( 'Womens Sandals', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Flats",
            "slug"              =>  Str::slug( 'Flats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "High Heels",
            "slug"              =>  Str::slug( 'High Heels', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Vulcanized Sneakers",
            "slug"              =>  Str::slug( 'Vulcanized Sneakers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "House Slippers",
            "slug"              =>  Str::slug( 'House Slippers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  49,
            "name"              =>  "Boots",
            "slug"              =>  Str::slug( 'Boots', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Men's Backpacks",
            "slug"              =>  Str::slug( 'Mens Backpacks', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Crossbody Bags",
            "slug"              =>  Str::slug( 'Crossbody Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Briefcases",
            "slug"              =>  Str::slug( 'Briefcases', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Luggage & Travel Bags",
            "slug"              =>  Str::slug( 'Luggage and Travel Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  50,
            "name"              =>  "Wallets",
            "slug"              =>  Str::slug( 'Wallets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Casual Shoes",
            "slug"              =>  Str::slug( 'Casual Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Vulcanized Sneakers",
            "slug"              =>  Str::slug( 'Vulcanized Sneakers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Men's Sandals",
            "slug"              =>  Str::slug( 'Mens Sandals', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Loafers",
            "slug"              =>  Str::slug( 'Loafers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Flip Flops",
            "slug"              =>  Str::slug( 'Flip Flops', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  51,
            "name"              =>  "Boots",
            "slug"              =>  Str::slug( 'Boots', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Kids & Baby Bags",
            "slug"              =>  Str::slug( 'Kids and Baby Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Cosmetic Bags & Cases",
            "slug"              =>  Str::slug( 'Cosmetic Bags and Cases', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Wallets & Card Holders",
            "slug"              =>  Str::slug( 'Wallets and Card Holders', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Luggage Covers",
            "slug"              =>  Str::slug( 'Luggage Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Passport Covers",
            "slug"              =>  Str::slug( 'Passport Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  52,
            "name"              =>  "Bag Parts & Accessories",
            "slug"              =>  Str::slug( 'Bag Parts and Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Wedge Sandals",
            "slug"              =>  Str::slug( 'Wedge Sandals', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Classic Heels",
            "slug"              =>  Str::slug( 'Classic Heels', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Large-Sized Flats",
            "slug"              =>  Str::slug( 'Large Sized Flats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Indoor Slippers",
            "slug"              =>  Str::slug( 'Indoor Slippers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Trendy Sneakers",
            "slug"              =>  Str::slug( 'Trendy Sneakers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  53,
            "name"              =>  "Comfortable Sandals",
            "slug"              =>  Str::slug( 'Comfortable Sandals', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Thermometers",
            "slug"              =>  Str::slug( 'Thermometers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Diaper Bags and Cloth Diapers",
            "slug"              =>  Str::slug( 'Diaper Bags and Cloth Diapers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Baby Teething Items",
            "slug"              =>  Str::slug( 'Baby Teething Items', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Baby Strollers",
            "slug"              =>  Str::slug( 'Baby Strollers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Blankets & Swaddling",
            "slug"              =>  Str::slug( 'Blankets and Swaddling', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Backpacks & Carriers",
            "slug"              =>  Str::slug( 'Backpacks and Carriers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Maternity Clothing",
            "slug"              =>  Str::slug( 'Maternity Clothing', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Highchairs",
            "slug"              =>  Str::slug( 'Highchairs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Baby Cribs",
            "slug"              =>  Str::slug( 'Baby Cribs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Baby Rompers",
            "slug"              =>  Str::slug( 'Baby Rompers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Clothing Sets",
            "slug"              =>  Str::slug( 'Clothing Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Outerwear & Coats",
            "slug"              =>  Str::slug( 'Outerwear and Coats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Baby’s First Walkers",
            "slug"              =>  Str::slug( 'Babys First Walkers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  55,
            "name"              =>  "Sandals & Clogs",
            "slug"              =>  Str::slug( 'Sandals and Clogs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Dresses",
            "slug"              =>  Str::slug( 'Dresses', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Clothing Sets",
            "slug"              =>  Str::slug( 'Clothing Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Tops & Tees",
            "slug"              =>  Str::slug( 'Tops and Tees', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Outerwear & Coats",
            "slug"              =>  Str::slug( 'Outerwear and Coats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Family Matching Outfits",
            "slug"              =>  Str::slug( 'Family Matching Outfits', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  58,
            "name"              =>  "Sleepwear & Robes",
            "slug"              =>  Str::slug( 'Sleepwear and Robes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Clothing Sets",
            "slug"              =>  Str::slug( 'Clothing Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "T-Shirts",
            "slug"              =>  Str::slug( 'T Shirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Outerwear & Coats",
            "slug"              =>  Str::slug( 'Outerwear and Coats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  54,
            "name"              =>  "Jeans",
            "slug"              =>  Str::slug( 'Jeans', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  57,
            "name"              =>  "Hoodies & Sweatshirts",
            "slug"              =>  Str::slug( 'Hoodies and Sweatshirts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Sneakers",
            "slug"              =>  Str::slug( 'Sneakers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Sandals",
            "slug"              =>  Str::slug( 'Sandals', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  56,
            "name"              =>  "Boots",
            "slug"              =>  Str::slug( 'Boots', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Remote Control",
            "slug"              =>  Str::slug( 'Remote Control', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Outdoor Activities",
            "slug"              =>  Str::slug( 'Outdoor Activities', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Action & Toy Figures",
            "slug"              =>  Str::slug( 'Action and Toy Figures', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Blocks",
            "slug"              =>  Str::slug( 'Blocks', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Toys & Dolls",
            "slug"              =>  Str::slug( 'Toys and Dolls', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Stuffed & Plush Animals",
            "slug"              =>  Str::slug( 'Stuffed and Plush Animals', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Building & Construction Toys",
            "slug"              =>  Str::slug( 'Building and Construction Toys', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Model Building Toys",
            "slug"              =>  Str::slug( 'Model Building Toys', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Movies & TV",
            "slug"              =>  Str::slug( 'Movies and TV', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Playmats",
            "slug"              =>  Str::slug( 'Playmats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  59,
            "name"              =>  "Baby Rattles",
            "slug"              =>  Str::slug( 'Baby Rattles', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  60,
            "name"              =>  "Hats & Caps",
            "slug"              =>  Str::slug( 'Hats and Caps', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  60,
            "name"              =>  "Bibs & Burp Cloths",
            "slug"              =>  Str::slug( 'Bibs and Burp Cloths', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  60,
            "name"              =>  "Headwear",
            "slug"              =>  Str::slug( 'Headwear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Bikini Sets",
            "slug"              =>  Str::slug( 'Bikini Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "One-Piece Suits",
            "slug"              =>  Str::slug( 'One Piece Suits', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Two-Piece Suits",
            "slug"              =>  Str::slug( 'Two Piece Suits', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Cover-Ups",
            "slug"              =>  Str::slug( 'Cover Ups', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Men's Swimwear",
            "slug"              =>  Str::slug( 'Mens Swimwear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  61,
            "name"              =>  "Children's Swimwear",
            "slug"              =>  Str::slug( 'Childrens Swimwear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycles",
            "slug"              =>  Str::slug( 'Bicycles', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycle Frames",
            "slug"              =>  Str::slug( 'Bicycle Frames', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycle Lights",
            "slug"              =>  Str::slug( 'Bicycle Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Bicycle Helmets",
            "slug"              =>  Str::slug( 'Bicycle Helmets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Cycling Jerseys",
            "slug"              =>  Str::slug( 'Cycling Jerseys', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  62,
            "name"              =>  "Cycling Eyewear",
            "slug"              =>  Str::slug( 'Cycling Eyewear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Running Shoes",
            "slug"              =>  Str::slug( 'Running Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Hiking Shoes",
            "slug"              =>  Str::slug( 'Hiking Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Soccer Shoes",
            "slug"              =>  Str::slug( 'Soccer Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Skateboarding Shoes",
            "slug"              =>  Str::slug( 'Skateboarding Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Dance Shoes",
            "slug"              =>  Str::slug( 'Dance Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  63,
            "name"              =>  "Basketball Shoes",
            "slug"              =>  Str::slug( 'Basketball Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Reels",
            "slug"              =>  Str::slug( 'Fishing Reels', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Lures",
            "slug"              =>  Str::slug( 'Fishing Lures', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Lines",
            "slug"              =>  Str::slug( 'Fishing Lines', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Rods",
            "slug"              =>  Str::slug( 'Fishing Rods', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Rod Combos",
            "slug"              =>  Str::slug( 'Rod Combos', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  64,
            "name"              =>  "Fishing Tackle Boxes",
            "slug"              =>  Str::slug( 'Fishing Tackle Boxes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Jerseys",
            "slug"              =>  Str::slug( 'Jerseys', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Hiking Jackets",
            "slug"              =>  Str::slug( 'Hiking Jackets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Pants",
            "slug"              =>  Str::slug( 'Pants', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Shorts",
            "slug"              =>  Str::slug( 'Shorts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Sports Bags",
            "slug"              =>  Str::slug( 'Sports Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  65,
            "name"              =>  "Sports Accessories",
            "slug"              =>  Str::slug( 'Sports Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Camping & Hiking",
            "slug"              =>  Str::slug( 'Camping and Hiking', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Hunting",
            "slug"              =>  Str::slug( 'Hunting', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Golf",
            "slug"              =>  Str::slug( 'Golf', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Fitness & Bodybuilding",
            "slug"              =>  Str::slug( 'Fitness and Bodybuilding', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Skiing & Snowboarding",
            "slug"              =>  Str::slug( 'Skiing and Snowboarding', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  66,
            "name"              =>  "Musical Instruments",
            "slug"              =>  Str::slug( 'Musical Instruments', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "Bundles With Closure",
            "slug"              =>  Str::slug( 'Bundles With Closure', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "3/4 Bundles",
            "slug"              =>  Str::slug( '3 4 Bundles', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "Pre-Colored Weaves",
            "slug"              =>  Str::slug( 'Pre Colored Weaves', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  67,
            "name"              =>  "Closures",
            "slug"              =>  Str::slug( 'Closures', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "Lace Front Wigs",
            "slug"              =>  Str::slug( 'Lace Front Wigs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "Full Lace Wigs",
            "slug"              =>  Str::slug( 'Full Lace Wigs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "360 Lace Wigs",
            "slug"              =>  Str::slug( '360 Lace Wigs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  68,
            "name"              =>  "250% Density Lace Wigs",
            "slug"              =>  Str::slug( '250 percent Density Lace Wigs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Synthetic Lace Wigs",
            "slug"              =>  Str::slug( 'Synthetic Lace Wigs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Synthetic Weaves",
            "slug"              =>  Str::slug( 'Synthetic Weaves', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Hair Braids",
            "slug"              =>  Str::slug( 'Hair Braids', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  69,
            "name"              =>  "Synthetic Extensions",
            "slug"              =>  Str::slug( 'Synthetic Extensions', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Eyes",
            "slug"              =>  Str::slug( 'Eyes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Lips",
            "slug"              =>  Str::slug( 'Lips', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Face",
            "slug"              =>  Str::slug( 'Face', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  70,
            "name"              =>  "Makeup Tools",
            "slug"              =>  Str::slug( 'Makeup Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Massage & Relaxation",
            "slug"              =>  Str::slug( 'Massage and Relaxation', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Household Health Monitors",
            "slug"              =>  Str::slug( 'Household Health Monitors', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Chinese Medicine",
            "slug"              =>  Str::slug( 'Chinese Medicine', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  71,
            "name"              =>  "Personal Health Care",
            "slug"              =>  Str::slug( 'Personal Health Care', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Face",
            "slug"              =>  Str::slug( 'Face', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Eyes",
            "slug"              =>  Str::slug( 'Eyes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Body",
            "slug"              =>  Str::slug( 'Body', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  72,
            "name"              =>  "Skin Care Tools",
            "slug"              =>  Str::slug( 'Skin Care Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Gel Nail Polish",
            "slug"              =>  Str::slug( 'Gel Nail Polish', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Nail Drills",
            "slug"              =>  Str::slug( 'Nail Drills', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Nail Dryers",
            "slug"              =>  Str::slug( 'Nail Dryers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  73,
            "name"              =>  "Nail Glitter",
            "slug"              =>  Str::slug( 'Nail Glitter', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  74,
            "name"              =>  "Hair Care & Styling",
            "slug"              =>  Str::slug( 'Hair Care and Styling', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  74,
            "name"              =>  "Shaving & Hair Removal",
            "slug"              =>  Str::slug( 'Shaving and Hair Removal', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  74,
            "name"              =>  "Oral Hygiene",
            "slug"              =>  Str::slug( 'Oral Hygiene', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  75,
            "name"              =>  "Tattoo Kits",
            "slug"              =>  Str::slug( 'Tattoo Kits', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  76,
            "name"              =>  "Condoms",
            "slug"              =>  Str::slug( 'Condoms', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  76,
            "name"              =>  "Lubricants",
            "slug"              =>  Str::slug( 'Lubricants', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  76,
            "name"              =>  "Vibrators",
            "slug"              =>  Str::slug( 'Vibrators', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Car Lights",
            "slug"              =>  Str::slug( 'Car Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Interior Parts",
            "slug"              =>  Str::slug( 'Interior Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Exterior Parts",
            "slug"              =>  Str::slug( 'Exterior Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Spark Plugs & Ignition Systems",
            "slug"              =>  Str::slug( 'Spark Plugs and Ignition Systems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Vehicle Sensors",
            "slug"              =>  Str::slug( 'Vehicle Sensors', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Brake Systems",
            "slug"              =>  Str::slug( 'Brake Systems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Windshield Wipers",
            "slug"              =>  Str::slug( 'Windshield Wipers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  77,
            "name"              =>  "Other Replacement Parts",
            "slug"              =>  Str::slug( 'Other Replacement Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Code Readers & Scanning Tools",
            "slug"              =>  Str::slug( 'Code Readers and Scanning Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Diagnostic Tools",
            "slug"              =>  Str::slug( 'Diagnostic Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Car Washing Tools",
            "slug"              =>  Str::slug( 'Car Washing Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Paint Care & Polishes",
            "slug"              =>  Str::slug( 'Paint Care and Polishes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  78,
            "name"              =>  "Other Maintenance Products",
            "slug"              =>  Str::slug( 'Other Maintenance Products', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Car Multimedia Players",
            "slug"              =>  Str::slug( 'Car Multimedia Players', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "DVR/Dash Cameras",
            "slug"              =>  Str::slug( 'DVR Dash Cameras', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Alarm Systems & Security",
            "slug"              =>  Str::slug( 'Alarm Systems and Security', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "GPS Trackers",
            "slug"              =>  Str::slug( 'GPS Trackers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Car Radios & Car Monitors",
            "slug"              =>  Str::slug( 'Car Radios and Car Monitors', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Vehicle Cameras",
            "slug"              =>  Str::slug( 'Vehicle Cameras', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Vehicle GPS Systems",
            "slug"              =>  Str::slug( 'Vehicle GPS Systems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  79,
            "name"              =>  "Jump Starters",
            "slug"              =>  Str::slug( 'Jump Starters', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  80,
            "name"              =>  "Car Stickers",
            "slug"              =>  Str::slug( 'Car Stickers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  80,
            "name"              =>  "Car Covers",
            "slug"              =>  Str::slug( 'Car Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  80,
            "name"              =>  "Other Exterior Accessories",
            "slug"              =>  Str::slug( 'Other Exterior Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Body & Frame Parts",
            "slug"              =>  Str::slug( 'Body and Frame Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Helmets & Protective Gear",
            "slug"              =>  Str::slug( 'Helmets and Protective Gear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Lighting",
            "slug"              =>  Str::slug( 'Lighting', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Braking Systems",
            "slug"              =>  Str::slug( 'Braking Systems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Exhaust Systems",
            "slug"              =>  Str::slug( 'Exhaust Systems', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Helmets & Headsets",
            "slug"              =>  Str::slug( 'Helmets and Headsets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Motorcycle Seat Covers",
            "slug"              =>  Str::slug( 'Motorcycle Seat Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  81,
            "name"              =>  "Other Motorcycle Accessories",
            "slug"              =>  Str::slug( 'Other Motorcycle Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Seat Covers",
            "slug"              =>  Str::slug( 'Seat Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Storage Solutions",
            "slug"              =>  Str::slug( 'Storage Solutions', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Car Key Cases",
            "slug"              =>  Str::slug( 'Car Key Cases', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Steering Wheel Covers",
            "slug"              =>  Str::slug( 'Steering Wheel Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  82,
            "name"              =>  "Floor Mats",
            "slug"              =>  Str::slug( 'Floor Mats', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Measurement & Analysis Tools",
            "slug"              =>  Str::slug( 'Measurement and Analysis Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Hand Tools",
            "slug"              =>  Str::slug( 'Hand Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Power Tools",
            "slug"              =>  Str::slug( 'Power Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Garden Tools",
            "slug"              =>  Str::slug( 'Garden Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Tool Sets",
            "slug"              =>  Str::slug( 'Tool Sets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Welding Equipment",
            "slug"              =>  Str::slug( 'Welding Equipment', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Welding & Soldering Supplies",
            "slug"              =>  Str::slug( 'Welding and Soldering Supplies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Machine Tools & Accessories",
            "slug"              =>  Str::slug( 'Machine Tools and Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Woodworking Machinery",
            "slug"              =>  Str::slug( 'Woodworking Machinery', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  86,
            "name"              =>  "Tool Storage Items",
            "slug"              =>  Str::slug( 'Tool Storage Items', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Ceiling Lights",
            "slug"              =>  Str::slug( 'Ceiling Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Pendant Lights",
            "slug"              =>  Str::slug( 'Pendant Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Downlights",
            "slug"              =>  Str::slug( 'Downlights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Chandeliers",
            "slug"              =>  Str::slug( 'Chandeliers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Wall Lamps",
            "slug"              =>  Str::slug( 'Wall Lamps', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  84,
            "name"              =>  "Night Lights",
            "slug"              =>  Str::slug( 'Night Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Strips",
            "slug"              =>  Str::slug( 'LED Strips', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Downlights",
            "slug"              =>  Str::slug( 'LED Downlights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Panel Lights",
            "slug"              =>  Str::slug( 'LED Panel Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Spotlights",
            "slug"              =>  Str::slug( 'LED Spotlights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  85,
            "name"              =>  "LED Bar Lights",
            "slug"              =>  Str::slug( 'LED Bar Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Electrical Equipment & Supplies",
            "slug"              =>  Str::slug( 'Electrical Equipment and Supplies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Wall Switches",
            "slug"              =>  Str::slug( 'Wall Switches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Hardware",
            "slug"              =>  Str::slug( 'Hardware', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Kitchen Fixtures",
            "slug"              =>  Str::slug( 'Kitchen Fixtures', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Paint Tools",
            "slug"              =>  Str::slug( 'Paint Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  83,
            "name"              =>  "Pumps",
            "slug"              =>  Str::slug( 'Pumps', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Flashlights",
            "slug"              =>  Str::slug( 'Flashlights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Solar Lamps",
            "slug"              =>  Str::slug( 'Solar Lamps', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Floodlights",
            "slug"              =>  Str::slug( 'Floodlights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "String Lights",
            "slug"              =>  Str::slug( 'String Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'subcategories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "category_id"       =>  87,
            "name"              =>  "Underwater Lights",
            "slug"              =>  Str::slug( 'Underwater Lights', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
