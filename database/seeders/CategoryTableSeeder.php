<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            "slug"              =>  Str::slug( 'Weddings and Events', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Women's Underwear",
            "slug"              =>  Str::slug( 'Womens Underwear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Accessories",
            "slug"              =>  Str::slug( 'Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Women's Fashion",
            "slug"              =>  Str::slug( 'Womens Fashion', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Bottoms",
            "slug"              =>  Str::slug( 'Bottoms', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  1,
            "name"              =>  "Swimwear",
            "slug"              =>  Str::slug( 'Swimwear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Hot Sale",
            "slug"              =>  Str::slug( 'Hot Sale', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Bottoms",
            "slug"              =>  Str::slug( 'Bottoms', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Underwear & Loungewear",
            "slug"              =>  Str::slug( 'Underwear and Loungewear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Outerwear & Jackets",
            "slug"              =>  Str::slug( 'Outerwear and Jackets', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Accessories",
            "slug"              =>  Str::slug( 'Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  2,
            "name"              =>  "Novelty & Special Use",
            "slug"              =>  Str::slug( 'Novelty and Special Use', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Mobile Phones",
            "slug"              =>  Str::slug( 'Mobile Phones', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Hot Brands",
            "slug"              =>  Str::slug( 'Hot Brands', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Mobile Phone Accessories",
            "slug"              =>  Str::slug( 'Mobile Phone Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Hot Cases & Covers",
            "slug"              =>  Str::slug( 'Hot Cases & Covers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Featured Accessories",
            "slug"              =>  Str::slug( 'Featured Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Mobile Phone Parts",
            "slug"              =>  Str::slug( 'Mobile Phone Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  3,
            "name"              =>  "Communication Equipments",
            "slug"              =>  Str::slug( 'Communication Equipments', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Components & Peripherals",
            "slug"              =>  Str::slug( 'Components & Peripherals', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Storage Devices",
            "slug"              =>  Str::slug( 'Storage Devices', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Computer Networking",
            "slug"              =>  Str::slug( 'Computer Networking', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Laptops",
            "slug"              =>  Str::slug( 'Laptops', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Office Electronics",
            "slug"              =>  Str::slug( 'Office Electronics', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  4,
            "name"              =>  "Security & Protection",
            "slug"              =>  Str::slug( 'Security and Protection', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Accessories & Parts",
            "slug"              =>  Str::slug( 'Accessories and Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Home Audio & Video",
            "slug"              =>  Str::slug( 'Home Audio and Video', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Camera & Photo",
            "slug"              =>  Str::slug( 'Camera and Photo', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Portable Audio & Video",
            "slug"              =>  Str::slug( 'Portable Audio and Video', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Smart Electronics",
            "slug"              =>  Str::slug( 'Smart Electronics', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  5,
            "name"              =>  "Video Games",
            "slug"              =>  Str::slug( 'Video Games', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Women's Watches",
            "slug"              =>  Str::slug( 'Womens Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Wedding & Engagement",
            "slug"              =>  Str::slug( 'Wedding and Engagement', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Men's Watches",
            "slug"              =>  Str::slug( 'Mens Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Fine Jewelry",
            "slug"              =>  Str::slug( 'Fine Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Fashion Jewelry",
            "slug"              =>  Str::slug( 'Fashion Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  6,
            "name"              =>  "Beads & DIY Jewelry",
            "slug"              =>  Str::slug( 'Beads and DIY Jewelry', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Art",
            "slug"              =>  Str::slug( 'art', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Garden Supplies",
            "slug"              =>  Str::slug( 'Garden Supplies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Home Textiles",
            "slug"              =>  Str::slug( 'Home Textiles', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Celebrations",
            "slug"              =>  Str::slug( 'Celebrations', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Household Items",
            "slug"              =>  Str::slug( 'Household Items', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Home Storage",
            "slug"              =>  Str::slug( 'Home Storage', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Pet Products",
            "slug"              =>  Str::slug( 'Pet Products', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Kitchen",
            "slug"              =>  Str::slug( 'Kitchen', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Home Decor",
            "slug"              =>  Str::slug( 'Home Decor', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  7,
            "name"              =>  "Furniture",
            "slug"              =>  Str::slug( 'Furniture', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Women's Luggage & Bags",
            "slug"              =>  Str::slug( 'Womens Luggage and Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Women's Shoes",
            "slug"              =>  Str::slug( 'Womens Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Men's Luggage & Bags",
            "slug"              =>  Str::slug( 'Mens Luggage and Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Men's Shoes",
            "slug"              =>  Str::slug( 'Mens Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Other Bags & Accessories",
            "slug"              =>  Str::slug( 'Other Bags and Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  8,
            "name"              =>  "Bestselling Shoes",
            "slug"              =>  Str::slug( 'Bestselling Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Boys Clothing",
            "slug"              =>  Str::slug( 'Boys Clothing', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Baby Clothing & Shoes",
            "slug"              =>  Str::slug( 'Baby Clothing and Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Shoes & Bags",
            "slug"              =>  Str::slug( 'Shoes and Bags', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Mother & Baby Items",
            "slug"              =>  Str::slug( 'Mother and Baby Items', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Girls Clothing",
            "slug"              =>  Str::slug( 'Girls Clothing', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Toys & Hobbies",
            "slug"              =>  Str::slug( 'Toys and Hobbies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  9,
            "name"              =>  "Accessories",
            "slug"              =>  Str::slug( 'Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Swimming",
            "slug"              =>  Str::slug( 'Swimming', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Cycling",
            "slug"              =>  Str::slug( 'Cycling', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Sneakers",
            "slug"              =>  Str::slug( 'Sneakers', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Fishing",
            "slug"              =>  Str::slug( 'Fishing', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Sportswear",
            "slug"              =>  Str::slug( 'Sportswear', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  10,
            "name"              =>  "Other Sports Equipment",
            "slug"              =>  Str::slug( 'Other Sports Equipment', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Hair Weaves",
            "slug"              =>  Str::slug( 'Hair Weaves', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Lace Wigs",
            "slug"              =>  Str::slug( 'Lace Wigs', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Synthetic Hair",
            "slug"              =>  Str::slug( 'Synthetic Hair', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Makeup",
            "slug"              =>  Str::slug( 'Makeup', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Health Care",
            "slug"              =>  Str::slug( 'Health Care', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Skin Care",
            "slug"              =>  Str::slug( 'Skin Care', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Nail Art & Tools",
            "slug"              =>  Str::slug( 'Nail Art and Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Personal Care",
            "slug"              =>  Str::slug( 'Personal Care', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Tattoos & Body Art",
            "slug"              =>  Str::slug( 'Tattoos and Body Art', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  11,
            "name"              =>  "Adult Items",
            "slug"              =>  Str::slug( 'Adult Items', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Auto Replacement Parts",
            "slug"              =>  Str::slug( 'Auto Replacement Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Tools, Maintenance & Care",
            "slug"              =>  Str::slug( 'Tools, Maintenance and Care', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Car Electronics",
            "slug"              =>  Str::slug( 'Car Electronics', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Exterior Accessories",
            "slug"              =>  Str::slug( 'Exterior Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Motorcycle Accessories & Parts",
            "slug"              =>  Str::slug( 'Motorcycle Accessories and Parts', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  12,
            "name"              =>  "Interior Accessories",
            "slug"              =>  Str::slug( 'Interior Accessories', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);

        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Home Improvement",
            "slug"              =>  Str::slug( 'Home Improvement', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Indoor Lighting",
            "slug"              =>  Str::slug( 'Indoor Lighting', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "LED Lighting",
            "slug"              =>  Str::slug( 'LED Lighting', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Tools",
            "slug"              =>  Str::slug( 'Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'categories' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "group_id"          =>  13,
            "name"              =>  "Outdoor Lighting",
            "slug"              =>  Str::slug( 'Outdoor Lighting', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
