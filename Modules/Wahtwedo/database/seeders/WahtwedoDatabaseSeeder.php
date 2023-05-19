<?php

namespace Modules\Wahtwedo\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Wahtwedo;

class WahtwedoDatabaseSeeder extends Seeder
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
         * Wahtwedos Seed
         * ------------------
         */

        // DB::table('wahtwedos')->truncate();
        // echo "Truncate: wahtwedos \n";

        Wahtwedo::factory()->count(20)->create();
        $rows = Wahtwedo::all();
        echo " Insert: wahtwedos \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
