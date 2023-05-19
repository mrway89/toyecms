<?php

namespace Modules\Homecard\Console\Commands;

use Illuminate\Console\Command;

class HomecardCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:HomecardCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Homecard Command description';

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
