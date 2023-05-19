<?php

namespace Modules\Toplink\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Toplink;

class ToplinkDatabaseSeeder extends Seeder
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
         * Toplinks Seed
         * ------------------
         */

        // DB::table('toplinks')->truncate();
        // echo "Truncate: toplinks \n";

        Toplink::factory()->count(20)->create();
        $rows = Toplink::all();
        echo " Insert: toplinks \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
