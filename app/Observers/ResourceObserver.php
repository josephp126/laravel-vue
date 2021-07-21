<?php

namespace App\Observers;

use App\Models\Resource;

class ResourceObserver
{
    /**
     * Handle the Resource "created" event.
     *
     * @param Resource $resource
     * @return void
     */
    public function created(Resource $resource)
    {
        //
    }

    /**
     * Handle the Resource "updated" event.
     *
     * @param Resource $resource
     * @return void
     */
    public function updated(Resource $resource)
    {
        //
    }

    /**
     * Handle the Resource "deleted" event.
     *
     * @param Resource $resource
     * @return void
     */
    public function deleted(Resource $resource)
    {
        $resource->deleteFile();
    }

    /**
     * Handle the Resource "restored" event.
     *
     * @param Resource $resource
     * @return void
     */
    public function restored(Resource $resource)
    {
        //
    }

    /**
     * Handle the Resource "force deleted" event.
     *
     * @param Resource $resource
     * @return void
     */
    public function forceDeleted(Resource $resource)
    {
        $resource->deleteFile();
    }
}
