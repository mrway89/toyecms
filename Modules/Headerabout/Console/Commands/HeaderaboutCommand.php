<?php

namespace Modules\Headerabout\Console\Commands;

use Illuminate\Console\Command;

class HeaderaboutCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:HeaderaboutCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Headerabout Command description';

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
