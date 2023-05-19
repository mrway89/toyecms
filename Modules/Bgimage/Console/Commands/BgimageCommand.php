<?php

namespace Modules\Bgimage\Console\Commands;

use Illuminate\Console\Command;

class BgimageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:BgimageCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bgimage Command description';

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
