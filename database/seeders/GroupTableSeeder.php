<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Women's Fashion",
            "slug"              =>  Str::slug( 'Women\'s Fashion', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Men's Fashion",
            "slug"              =>  Str::slug( 'Men\'s Fashion', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Phones & Telecommunications",
            "slug"              =>  Str::slug( 'Phones & Telecommunications', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Computer, Office & Security",
            "slug"              =>  Str::slug( 'Computer, Office & Security', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Consumer Electronics",
            "slug"              =>  Str::slug( 'Consumer Electronics', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Jewelry & Watches",
            "slug"              =>  Str::slug( 'Jewelry & Watches', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Home, Pet & Appliances",
            "slug"              =>  Str::slug( 'Home Pet & Appliances', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Bags & Shoes",
            "slug"              =>  Str::slug( 'Bags & Shoes', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Toys, Kids & Babies",
            "slug"              =>  Str::slug( 'Toys Kids & Babies', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Outdoor Fun & Sports",
            "slug"              =>  Str::slug( 'Outdoor Fun & Sports', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Beauty, Health & Hair",
            "slug"              =>  Str::slug( 'Beauty, Health & Hair', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Automobiles & Motorcycles",
            "slug"              =>  Str::slug( 'Automobiles & Motorcycles', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Home Improvement & Tools",
            "slug"              =>  Str::slug( 'Home Improvement & Tools', '-' ),
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        =>  date("Y-m-d H:i:s"),
            "updated_at"        =>  date("Y-m-d H:i:s"),
        ]);
    }
}
