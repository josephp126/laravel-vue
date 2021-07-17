<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Foundation\Bus\Dispatchable;

class ProductImportJob
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

        $records = $db_connection
            ->table('product')
            ->get();

        foreach ($records as $record) {
//            $images = $db_connection
//                ->table('product_image')
//                ->where('product_image.ProductId', $record->Id)
//                ->leftJoin('image', 'product_image.ImageId', 'image.Id')
//                ->get();

            Product::firstOrCreate(
                [
                    'title' => $record->Title,
                    'code'  => $record->Code,
                ],
                [
                    'title'       => $record->Title,
                    'code'        => $record->Code,
                    'description' => $record->Description,
                    'link'        => $record->Link,
                    'more_info'   => $record->MoreInfo ?? '',
                    'subtitle'    => $record->SubTitle,
                    'active'      => $record->IsActive ?? false,
                ]
            );
        }
    }
}
