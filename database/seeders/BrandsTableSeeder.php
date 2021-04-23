<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'brands' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "TCL",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'brands' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Samsung",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'brands' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "LG",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'brands' ) -> insert([
            "resource_id"       =>  hexdec( uniqid() ),
            "name"              =>  "Apple",
            "description"       =>  "This is youtube channel which helps new web developer learn and upgrade their skills",
            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
