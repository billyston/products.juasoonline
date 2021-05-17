<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call([ CountriesTableSeeder::class ]);
        $this -> call([ PromoTypeTableSeeder::class ]);
        $this -> call([ GroupTableSeeder::class ]);
        $this -> call([ CategoryTableSeeder::class ]);
        $this -> call([ SubcategoryTableSeeder::class ]);
        $this -> call([ BrandsTableSeeder::class ]);
    }
}
