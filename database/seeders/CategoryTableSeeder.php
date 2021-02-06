<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Weddings & Events",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Women's Underwear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Women's Fashion",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Bottoms",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Swimwear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Hot Sale",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Bottoms",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Underwear & Loungewear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Outerwear & Jackets",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Novelty & Special Use",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Mobile Phones",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Hot Brands",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Mobile Phone Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Hot Cases & Covers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Featured Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Mobile Phone Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Communication Equipments",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Components & Peripherals",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Storage Devices",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Computer Networking",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Laptops",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Office Electronics",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Security & Protection",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Accessories & Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Home Audio & Video",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Camera & Photo",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Portable Audio & Video",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Smart Electronics",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Video Games",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Women's Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Wedding & Engagement",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Men's Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Fine Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Fashion Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Beads & DIY Jewelry",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Art",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Garden Supplies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Home Textiles",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Celebrations",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Household Items",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Home Storage",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Pet Products",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Kitchen",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Home Decor",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Furniture",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Women's Luggage & Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Women's Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Men's Luggage & Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Men's Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Other Bags & Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Bestselling Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Boys Clothing",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Baby Clothing & Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Shoes & Bags",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Mother & Baby Items",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Girls Clothing",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Toys & Hobbies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Swimming",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Cycling",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Sneakers",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Fishing",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Sportswear",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Other Sports Equipment",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Hair Weaves",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Lace Wigs",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Synthetic Hair",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Makeup",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Health Care",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Skin Care",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Nail Art & Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Personal Care",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Tattoos & Body Art",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Adult Items",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Auto Replacement Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Tools, Maintenance & Care",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Car Electronics",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Exterior Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Motorcycle Accessories & Parts",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Interior Accessories",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Home Improvement",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Indoor Lighting",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "LED Lighting",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Outdoor Lighting",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
