<?php

namespace Modules\Aboutdescone\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Aboutdescone;

class AboutdesconeDatabaseSeeder extends Seeder
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
         * Aboutdescones Seed
         * ------------------
         */

        // DB::table('aboutdescones')->truncate();
        // echo "Truncate: aboutdescones \n";

        Aboutdescone::factory()->count(20)->create();
        $rows = Aboutdescone::all();
        echo " Insert: aboutdescones \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
