<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "1920*1080P Full HD NTSC 72% 10 Point Touching Portable Monitor Capacitive Screen for Samsung S8 DEX,Huawei P30 EMUI",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  200,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "2018 New 2Pcs_ Set of Luxury Natural Tiger Eye Stone Bracelet Ladies And Gentlemen Jewelry Necklace Bracelet Gift Men's Bracelet",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  267,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "2020 Black Wool Mens Pants Luxury Solid Color Business And Casual Male Pants Autumn And Winter Slim Fit Man Trousers",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  167,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "2021 SANLEPUS ECG Smart Watch Bluetooth Call Smartwatch Men Sport Fitness Bracelet Clock Watches For Android Apple Xiaomi Huawei",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  1067,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Baseus USB C HUB Type C to HDMI compatible USB 3.0 Adapter 8 in 1 Type C HUB Dock for MacBook Pro Air USB C Splitter",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  17,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "BYINTEK K9 Mini 1280x720P Portable Video Beamer LED Projector Proyector for 1080P 3D 4K Cinema(Option Multi Screen For Iphone",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  2690,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "CFLY Faith 2 GPS 3 Axis Gimbal fpv Drone Quadcopter C FLY Faith2 Collapsible Helicopter 4K Video Photo Ambarella SONY Camera",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  700,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Fashion Brand Hip Hop Men T Shirts 2021 Summer Men's T Shirt New Casual Solid Tshirts Street Brand Clothing Men Tee Shirts Tops",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  180,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Free Shipping Top Quality Sexy V Neck Button Split Black Purple Bandage Dress 2021 Knitted Elastic Elegant Evening Party Dress|purple bandage dress",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  677,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Giordano Men T Shirt Cotton Short Sleeve 3 pack Tshirt Solid Tee Summer Beathable Male Tops Clothing Camiseta Masculina 01245504",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  1207,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Hagibis USB C Hub with SATA Hard Drive Enclosure for Mac mini USB 3.0 hub for 2020 NEW Mac mini M1 Type C SSD Case SD_TF Reader",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  1001,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "JBL Boombox 2 Portable Wireless Bluetooth Speaker IPX7 Boom Box Waterproof Loudspeaker Dynamics Music Subwoofer Outdoor Stereo AI Speakers",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Minglu Green Yarn Dye Sweatshirt Male High Quality Round Collar Spring And Autumn Mens Hoodies Fashon Slim Fit Men Hoodie 4XL|Hoodies & Sweatshirts",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  1067,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Minglu Spring Mens Shirts Luxury Flower Printing Long Sleeve Casual Mens Dress Shirts Fashion Slim Fit Party Male Shirts",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  67,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Printing T shirts Mens Unisex Short Sleeve Shirts 100% Cotton Casual Men Top Tee Sweatshirts 2021 Summer New Male Clothing 5XL",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  1207,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Professional Dead Skin Planer Handle Dead Skin Calluses Removal Feet Care Nursing Foot Pedicure Portable Foot Care Tools",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  1001,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Prova Perfetto Fashion suede Pointed toe Men shoes Autumn winter Popular Low heels Man boots Retro High top Chelsea Boots",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "Prova Perfetto New Popular Outdoor Non slip Low heels Martin boots High top England style Genuine Leather suede Chelsea Boots",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  1067,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),

            "name"              =>  "saengQ Electric Aroma Diffuser Air Humidifier 300ML 500ML 1000ML Ultrasonic Cool Mist Maker Fogger LED Essential Oil Diffuser",
            "quantity"          =>  "5644",
            "price"             =>  "2400",
            "sales_price"       =>  "2210",
            "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

            "store_id"          =>  1,
            "brand_id"          =>  1,
            "charge_id"         =>  1,

            "total_sold"        =>  67,

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'products' ) -> insert(
            [
                "resource_id"       =>  hexdec( uniqid() ),

                "name"              =>  "TRLIFE 5200mAh Bicycle Light 3*L2_T6 USB Rechargeable Bike Lamp IPX5 Waterproof LED Headlight as Power Bank MTB Bike Accessories",
                "quantity"          =>  "5644",
                "price"             =>  "2400",
                "sales_price"       =>  "2210",
                "description"       =>  "Here are the types of companies that may benefit a lot from building a custom gateway",

                "store_id"          =>  1,
                "brand_id"          =>  1,
                "charge_id"         =>  1,

                "total_sold"        =>  1267,

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
    }
}
