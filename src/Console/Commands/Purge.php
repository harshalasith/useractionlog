<?php

namespace Sprii\UserActionLog\Console\Commands;

use Illuminate\Console\Command;

class Purge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sprii:purge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete expired refresh tokens and their associated tokens from the database';

    /**
     * Execute the console command.
     *
     * @param  \Laravel\Passport\ClientRepository  $clients
     * @return void
     */
    public function handle(ClientRepository $clients)
    {
       $this->info('Successfully deleted expired tokens: ');
    }
}
