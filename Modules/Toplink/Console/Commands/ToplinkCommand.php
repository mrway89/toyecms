<?php

namespace Modules\Toplink\Console\Commands;

use Illuminate\Console\Command;

class ToplinkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ToplinkCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Toplink Command description';

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
