<?php

namespace Modules\Imageabout\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Imageabout;

class ImageaboutDatabaseSeeder extends Seeder
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
         * Imageabouts Seed
         * ------------------
         */

        // DB::table('imageabouts')->truncate();
        // echo "Truncate: imageabouts \n";

        Imageabout::factory()->count(20)->create();
        $rows = Imageabout::all();
        echo " Insert: imageabouts \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
