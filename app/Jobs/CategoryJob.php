<?php

namespace App\Jobs;

use App\Models\Category;
use Illuminate\Foundation\Bus\Dispatchable;

class CategoryJob
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

        $records = $db_connection->table('category')->get();

        foreach ($records as $record) {
            Category::firstOrCreate(
                ['name' => $record->Name],
                [
                    'name'      => $record->Name,
                    'parent_id' => $record->ParentId,
                    'root_id'   => $record->RootId,
                    'order'     => $record->Order,
                ]
            );
        }
    }
}
