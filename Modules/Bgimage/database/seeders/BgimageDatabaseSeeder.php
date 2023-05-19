<?php

namespace Modules\Bgimage\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Bgimage;

class BgimageDatabaseSeeder extends Seeder
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
         * Bgimages Seed
         * ------------------
         */

        // DB::table('bgimages')->truncate();
        // echo "Truncate: bgimages \n";

        Bgimage::factory()->count(20)->create();
        $rows = Bgimage::all();
        echo " Insert: bgimages \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
