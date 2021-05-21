<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'stores' ) -> insert(
        [
            "resource_id"       =>  "8572852475",

            "name"              =>  "Test Store 1 Ghana Limited",
            "doing_business_as" =>  "Test Store 1",

            "region"            =>  "Greater Accra",
            "city"              =>  "Accra",
            "address"           =>  "Lakeside Estate, Ashaley Botwe. Adenta",
            "postal_code"       =>  "GPS-9776984",

            "mobile_phone"      =>  "2143658709",
            "other_phone"       =>  "9078563412",

            "website"           =>  "http://teststoreone.com",
            "email"             =>  "info@teststoreone.com",

            "country_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'stores' ) -> insert(
        [
            "resource_id"       =>  "8574525262644",

            "name"              =>  "Test Store 2 Ghana Limited",
            "doing_business_as" =>  "Test Store 2",

            "region"            =>  "Greater Accra",
            "city"              =>  "Accra",
            "address"           =>  "957257 Adade Road, East Legon",
            "postal_code"       =>  "GPS-9776984",

            "mobile_phone"      =>  "01234567890",
            "other_phone"       =>  "09876543210",

            "website"           =>  "http://teststoretwo.com",
            "email"             =>  "info@teststoretwo.com",

            "country_id"        =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
