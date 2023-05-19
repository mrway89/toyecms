<?php

namespace Modules\CategoriesProduct\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\CategoriesProduct;

class CategoriesProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * CategoriesProducts Seed
         * ------------------
         */

        // DB::table('categoriesproducts')->truncate();
        // echo "Truncate: categoriesproducts \n";

        CategoriesProduct::factory()->count(20)->create();
        $rows = CategoriesProduct::all();
        echo " Insert: categoriesproducts \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
