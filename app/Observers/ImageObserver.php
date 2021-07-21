<?php

namespace App\Observers;

use App\Models\Image;

class ImageObserver
{
    /**
     * Handle the image "created" event.
     *
     * @param Image $image
     */
    public function created(Image $image)
    {
        //
    }

    /**
     * Handle the image "updated" event.
     *
     * @param Image $image
     */
    public function updated(Image $image)
    {
        //
    }

    /**
     * Handle the image "deleted" event.
     *
     * @param Image $image
     */
    public function deleted(Image $image)
    {
        $image->deleteFile();
    }

    /**
     * Handle the image "restored" event.
     *
     * @param Image $image
     */
    public function restored(Image $image)
    {
        //
    }

    /**
     * Handle the image "force deleted" event.
     *
     * @param Image $image
     */
    public function forceDeleted(Image $image)
    {
        $image->deleteFile();
    }
}
