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
        $this -> call([ BrandsTableSeeder::class ]);

        $this -> call([ GroupTableSeeder::class ]);
        $this -> call([ CategoryTableSeeder::class ]);
        $this -> call([ SubcategoryTableSeeder::class ]);
        $this -> call([ SubscriptionTableSeeder::class ]);

        $this -> call([ StoreTableSeeder::class ]);
        $this -> call([ StoreAdministratorTableSeeder::class ]);
        $this -> call([ ChargeTableSeeder::class ]);

        $this -> call([ CustomerTableSeeder::class ]);
        $this -> call([ AddressTableSeeder::class ]);

        $this -> call([ ProductTableSeeder::class ]);
        $this -> call([ ProductCategoryTableSeeder::class ]);
        $this -> call([ SpecificationTableSeeder::class ]);
        $this -> call([ ImageTableSeeder::class ]);
        $this -> call([ OverviewTableSeeder::class ]);
        $this -> call([ ColorTableSeeder::class ]);
        $this -> call([ SizeTableSeeder::class ]);
        $this -> call([ PromotionTableSeeder::class ]);
    }
}
