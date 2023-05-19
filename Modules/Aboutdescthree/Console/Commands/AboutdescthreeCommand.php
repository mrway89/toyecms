<?php

namespace Modules\Aboutdescthree\Console\Commands;

use Illuminate\Console\Command;

class AboutdescthreeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AboutdescthreeCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aboutdescthree Command description';

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
