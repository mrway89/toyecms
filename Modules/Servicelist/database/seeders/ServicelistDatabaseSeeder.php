<?php

namespace Modules\Servicelist\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Servicelist;

class ServicelistDatabaseSeeder extends Seeder
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
         * Servicelists Seed
         * ------------------
         */

        // DB::table('servicelists')->truncate();
        // echo "Truncate: servicelists \n";

        Servicelist::factory()->count(20)->create();
        $rows = Servicelist::all();
        echo " Insert: servicelists \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
