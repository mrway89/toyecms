<?php

namespace Modules\Daftaremail\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Daftaremail;

class DaftaremailDatabaseSeeder extends Seeder
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
         * Daftaremails Seed
         * ------------------
         */

        // DB::table('daftaremails')->truncate();
        // echo "Truncate: daftaremails \n";

        Daftaremail::factory()->count(20)->create();
        $rows = Daftaremail::all();
        echo " Insert: daftaremails \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
