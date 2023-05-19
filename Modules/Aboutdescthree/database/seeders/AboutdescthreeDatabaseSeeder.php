<?php

namespace Modules\Aboutdescthree\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Aboutdescthree;

class AboutdescthreeDatabaseSeeder extends Seeder
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
         * Aboutdescthrees Seed
         * ------------------
         */

        // DB::table('aboutdescthrees')->truncate();
        // echo "Truncate: aboutdescthrees \n";

        Aboutdescthree::factory()->count(20)->create();
        $rows = Aboutdescthree::all();
        echo " Insert: aboutdescthrees \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
