<?php

namespace App\Console\Commands;

use App\Jobs\ImportUsers;
use App\Jobs\LegacyUsers;
use DB;
use Illuminate\Console\Command;

class DatabaseMigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pottorff:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate the old database to the new';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $legacy_connection = DB::connection('mysql_legacy');


        $this->info('LegacyUsers');
        dispatch(new LegacyUsers($legacy_connection));

        return 0;
    }
}
