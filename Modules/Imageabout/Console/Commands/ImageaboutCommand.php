<?php

namespace Modules\Imageabout\Console\Commands;

use Illuminate\Console\Command;

class ImageaboutCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ImageaboutCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imageabout Command description';

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
