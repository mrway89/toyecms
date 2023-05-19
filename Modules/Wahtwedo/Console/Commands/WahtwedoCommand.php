<?php

namespace Modules\Wahtwedo\Console\Commands;

use Illuminate\Console\Command;

class WahtwedoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:WahtwedoCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Wahtwedo Command description';

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
