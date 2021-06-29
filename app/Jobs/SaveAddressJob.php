<?php

namespace App\Jobs;

use Illuminate\Foundation\Bus\Dispatchable;

class SaveAddressJob {
    use Dispatchable;

    private $address;
    private $zip;
    private $state_id;
    private $city;
    private $relate;

    /**
    * Create a new job instance.
    *
    * @param $relate
    * @param $file
    */

    public function __construct( $relate, $address, $zip, $state_id, $city ) {
        $this->address = $address;
        $this->zip = $zip;
        $this->state_id = $state_id;
        $this->city = $city;
        $this->relate = $relate;
    }

    /**
    * Execute the job.
    *
    * @return void
    */

    public function handle() {
        $relate = $this->relate;
        $relate->address()->updateOrCreate(
            [
                'address'   => $this->address,
                'zip'       => $this->zip,
                'state_id' => $this->state_id,
                'city'        => $this->city,
            ]
        );
    }
}
