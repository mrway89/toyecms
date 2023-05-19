<?php

namespace Modules\Headerabout\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Headerabout;

class HeaderaboutDatabaseSeeder extends Seeder
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
         * Headerabouts Seed
         * ------------------
         */

        // DB::table('headerabouts')->truncate();
        // echo "Truncate: headerabouts \n";

        Headerabout::factory()->count(20)->create();
        $rows = Headerabout::all();
        echo " Insert: headerabouts \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
