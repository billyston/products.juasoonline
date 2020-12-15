<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Men's Fashion",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Phones & Telecommunications",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Computer, Office & Security",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Consumer Electronics",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Jewelry & Watches",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Home, Pet & Appliances",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Bags & Shoes",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Toys, Kids & Babies",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Outdoor Fun & Sports",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Beauty, Health & Hair",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Automobiles & Motorcycles",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'groups' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Home Improvement & Tools",
            "slug"              =>  "",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
