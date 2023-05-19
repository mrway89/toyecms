<?php

namespace Modules\Servicelist\Console\Commands;

use Illuminate\Console\Command;

class ServicelistCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ServicelistCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Servicelist Command description';

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
