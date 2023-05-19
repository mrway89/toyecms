<?php

namespace Modules\Aboutdesctwo\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Aboutdesctwo;

class AboutdesctwoDatabaseSeeder extends Seeder
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
         * Aboutdesctwos Seed
         * ------------------
         */

        // DB::table('aboutdesctwos')->truncate();
        // echo "Truncate: aboutdesctwos \n";

        Aboutdesctwo::factory()->count(20)->create();
        $rows = Aboutdesctwo::all();
        echo " Insert: aboutdesctwos \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
