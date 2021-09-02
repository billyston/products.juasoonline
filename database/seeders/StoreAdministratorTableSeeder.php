<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreAdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'store_administrators' ) -> insert(
        [
            "resource_id"       =>  "85728556345",

            "first_name"        =>  "Michael",
            "other_names"       =>  "Kabutey",
            "last_name"         =>  "Katey",

            "designation"       =>  "General Manager",

            "mobile_phone"      =>  "0244637602",
            "office_phone"      =>  "0238958099",

            "email"             =>  "billyston@gmail.com",

            "store_id"          =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'store_administrators' ) -> insert(
        [
            "resource_id"       =>  "8574525096754",

            "first_name"        =>  "James",
            "other_names"       =>  "Duah",
            "last_name"         =>  "Nart",

            "designation"       =>  "Product Manager",

            "mobile_phone"      =>  "0244637609",
            "office_phone"      =>  "0238958033",

            "email"             =>  "billyston@yahoo.com",

            "store_id"          =>  2,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
