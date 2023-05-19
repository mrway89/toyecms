<?php

namespace Modules\CategoriesProduct\Console\Commands;

use Illuminate\Console\Command;

class CategoriesProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:CategoriesProductCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CategoriesProduct Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
