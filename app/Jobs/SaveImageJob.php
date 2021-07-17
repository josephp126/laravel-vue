<?php

namespace App\Jobs;

use Illuminate\Foundation\Bus\Dispatchable;
use Intervention\Image\ImageManagerStatic as Imager;
use Storage;

class SaveImageJob
{
    use Dispatchable;

    private $file;
    private $relate;
    /**
     * @var false
     */
    private bool $multi;
    private array $additional_image_props;

    /**
     * Create a new job instance.
     *
     * @param $relate
     * @param $file
     */
    public function __construct($relate, $file, $multi = false, $additional_image_props = [])
    {
        $this->file                   = $file;
        $this->relate                 = $relate;
        $this->multi                  = $multi;
        $this->additional_image_props = $additional_image_props;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file                   = $this->file;
        $relate                 = $this->relate;
        $additional_image_props = $this->additional_image_props ?? [];

        if ($file) {
            // create the image relationship to the model
            if (!$this->multi) {
                $image = $relate->image()->updateOrCreate(
                    [
                        'mime_type'   => $file->getMimeType(),
                        'title'       => $file->getClientOriginalName(),
                        'code_number' => 1,
                        'hash'        => $file->hashName(),
                    ]
                );
            } else {
                $image = $relate->images()->create(
                    [
                        'mime_type'   => $file->getMimeType(),
                        'title'       => $file->getClientOriginalName(),
                        'code_number' => 1,
                        'hash'        => $file->hashName(),
                    ]
                );
            }

            if (count($additional_image_props) > 0) {
                $image->update($additional_image_props);
            }

            // get the image contents
            if ($file->getMimeType() == 'image/svg+xml') {
                $newFile = $file->getContent();
            } else {
                $newFile = Imager::make($file)->encode();
            }

            // store the image to the images disk
            Storage::disk('images')->put($image->hash, (string)$newFile);
        }
    }
}
