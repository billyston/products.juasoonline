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
            "resource_id"               =>  "8572852475",

            "name"                      =>  "Business Merchandise Limited",
            "doing_business_as"         =>  "Business Merchandise",

            "region"                    =>  "Greater Accra",
            "city"                      =>  "Accra",
            "address"                   =>  "Lakeside Estate, Ashaley Botwe. Adenta",
            "postal_code"               =>  "GPS-9776984",

            "mobile_phone"              =>  "2143658709",
            "other_phone"               =>  "9078563412",

            "website"                   =>  "https://juasomerchandise.com",
            "email"                     =>  "info@juasomerchandise.com",

            "banner_image"              =>  "https://assets.juasoonline.com/juasoonline/assets/images/ads/top/banner1.jpg",

            "country_id"                =>  1,
            "subscription_id"           =>  1,

            "created_at"                => date("Y-m-d H:i:s"),
            "updated_at"                => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'stores' ) -> insert(
        [
            "resource_id"               =>  "8574525262644",

            "name"                      =>  "Business Electronics Limited",
            "doing_business_as"         =>  "Business Electronics",

            "region"                    =>  "Greater Accra",
            "city"                      =>  "Accra",
            "address"                   =>  "957257 Adade Road, East Legon",
            "postal_code"               =>  "GPS-9776984",

            "mobile_phone"              =>  "01234567890",
            "other_phone"               =>  "09876543210",

            "website"                   =>  "https://juasoelectronics.com",
            "email"                     =>  "info@juasoelectronics.com",

            "country_id"                =>  1,
            "subscription_id"           =>  2,

            "created_at"                => date("Y-m-d H:i:s"),
            "updated_at"                => date("Y-m-d H:i:s"),
        ]);
    }
}
