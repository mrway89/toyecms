<?php

namespace Modules\Whoarewe\Console\Commands;

use Illuminate\Console\Command;

class WhoareweCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:WhoareweCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Whoarewe Command description';

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
