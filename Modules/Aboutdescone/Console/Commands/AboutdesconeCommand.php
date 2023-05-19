<?php

namespace Modules\Aboutdescone\Console\Commands;

use Illuminate\Console\Command;

class AboutdesconeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AboutdesconeCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aboutdescone Command description';

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
