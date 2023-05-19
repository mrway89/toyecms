<?php

namespace Modules\Daftaremail\Console\Commands;

use Illuminate\Console\Command;

class DaftaremailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DaftaremailCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daftaremail Command description';

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
