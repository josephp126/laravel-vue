<?php

namespace App\Jobs;

use Illuminate\Foundation\Bus\Dispatchable;
use Storage;

class SaveResourceJob
{
    use Dispatchable;

    private $file;
    private $relate;
    private bool $multi;
    private array $additional_resource_props;

    /**
     * Create a new job instance.
     *
     * @param       $relate
     * @param       $file
     * @param bool  $multi
     * @param array $additional_resource_props
     */
    public function __construct($relate, $file, $multi = false, $additional_resource_props = [])
    {
        $this->file                      = $file;
        $this->relate                    = $relate;
        $this->multi                     = $multi;
        $this->additional_resource_props = $additional_resource_props;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file                      = $this->file;
        $relate                    = $this->relate;
        $additional_resource_props = $this->additional_resource_props ?? [];

        if ($file) {
            // create the image relationship to the model

            $resource = $relate->resources()->create(
                [
                    'mime_type'   => $file->getMimeType(),
                    'title'       => $file->getClientOriginalName(),
                    'filename'    => $file->getClientOriginalName(),
                    'code_number' => 1,
                    'is_active'   => true,
                    'hash'        => $file->hashName(),
                ]
            );

            if (count($additional_resource_props) > 0) {
                $resource->update($additional_resource_props);
            }

            // get the image contents
            $newFile = $file->getContent();

            // store the image to the images disk
            Storage::disk('resources')->put($resource->hash, (string)$newFile);
        }
    }
}
