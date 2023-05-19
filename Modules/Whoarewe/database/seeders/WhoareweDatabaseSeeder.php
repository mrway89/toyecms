<?php

namespace Modules\Whoarewe\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Whoarewe;

class WhoareweDatabaseSeeder extends Seeder
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
         * Whoarewes Seed
         * ------------------
         */

        // DB::table('whoarewes')->truncate();
        // echo "Truncate: whoarewes \n";

        Whoarewe::factory()->count(20)->create();
        $rows = Whoarewe::all();
        echo " Insert: whoarewes \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
