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
     * Create a new job instance.
     *
     * @param $relate
     * @param $file
     */
    public function __construct($relate, $file)
    {
        $this->file   = $file;
        $this->relate = $relate;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file   = $this->file;
        $relate = $this->relate;

        if ($file) {
            $image = $relate->image()->updateOrCreate(
                [
                    'mime_type'   => $file->getMimeType(),
                    'title'       => $file->getClientOriginalName(),
                    'code_number' => 1,
                    'hash'        => $file->hashName(),
                ]
            );

            if ($file->getMimeType() == 'image/svg+xml') {
                $newFile = $file->getContent();
            } else {
                $newFile = Imager::make($file)->encode();
            }

            Storage::disk('images')->put($image->hash, (string)$newFile);
        }
    }
}
