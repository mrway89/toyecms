<?php

namespace Modules\Homesolution\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Homesolution;

class HomesolutionDatabaseSeeder extends Seeder
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
         * Homesolutions Seed
         * ------------------
         */

        // DB::table('homesolutions')->truncate();
        // echo "Truncate: homesolutions \n";

        Homesolution::factory()->count(20)->create();
        $rows = Homesolution::all();
        echo " Insert: homesolutions \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
