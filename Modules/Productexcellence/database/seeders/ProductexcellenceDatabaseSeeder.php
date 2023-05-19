<?php

namespace Modules\Productexcellence\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Productexcellence;

class ProductexcellenceDatabaseSeeder extends Seeder
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
         * Productexcellences Seed
         * ------------------
         */

        // DB::table('productexcellences')->truncate();
        // echo "Truncate: productexcellences \n";

        Productexcellence::factory()->count(20)->create();
        $rows = Productexcellence::all();
        echo " Insert: productexcellences \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
