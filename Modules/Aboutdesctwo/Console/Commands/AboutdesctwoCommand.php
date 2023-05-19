<?php

namespace Modules\Aboutdesctwo\Console\Commands;

use Illuminate\Console\Command;

class AboutdesctwoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AboutdesctwoCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aboutdesctwo Command description';

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
