<?php

namespace Modules\Homesolution\Console\Commands;

use Illuminate\Console\Command;

class HomesolutionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:HomesolutionCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Homesolution Command description';

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
