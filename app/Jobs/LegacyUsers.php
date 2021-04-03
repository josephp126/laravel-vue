<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Foundation\Bus\Dispatchable;

//use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Queue\InteractsWithQueue;
//use Illuminate\Queue\SerializesModels;

class LegacyUsers
{
    use Dispatchable;

    private $db_connection;

    /**
     * Create a new job instance.
     *
     * @param $db_connection
     */
    public function __construct($db_connection)
    {
        $this->db_connection = $db_connection;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $db_connection = $this->db_connection;

        $records = $db_connection->table('user')->get();

        foreach ($records as $record) {
            $u = User::create(
                [
                    'guid'        => $record->Guid,
                    'first_name'  => $record->Firstname,
                    'last_name'   => $record->Lastname,
                    'username'    => $record->Username,
                    'password'    => $record->Password,
                    'email'       => $record->Email,
                    'date_joined' => $record->DateJoined,
                    'phone'   => $record->Phone ?? null,
                ]
            );

//            $u->address()->create(
//                [
//                    'address' => $record->Address,
//                    'zip'     => $record->ZIP,
//                    'city'    => $record->City,
//                ]
//            );
        }
    }
}
