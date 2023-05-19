<?php

namespace Modules\Contactu\Console\Commands;

use Illuminate\Console\Command;

class ContactuCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ContactuCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Contactu Command description';

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
