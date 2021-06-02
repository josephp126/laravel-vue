<?php

namespace App\Observers;

use App\Models\Slide;

class SlideObserver
{
    /**
     * Handle the slide "created" event.
     *
     * @param Slide $slide
     */
    public function created(Slide $slide)
    {
        $nextSlide = Slide::orderBy('sort', 'desc')->select('sort')->first();
        $slide->update(['sort' => $nextSlide->sort]);
    }

    /**
     * Handle the slide "deleted" event.
     *
     * @param Slide $slide
     */
    public function deleted(Slide $slide)
    {
        $slide->image()->delete();
    }

    /**
     * Handle the slide "restored" event.
     *
     * @param Slide $slide
     */
    public function restored(Slide $slide)
    {
        $slide->image()->withTrashed()->restore();
    }

    /**
     * Handle the slide "force deleted" event.
     *
     * @param Slide $slide
     */
    public function forceDeleted(Slide $slide)
    {
        $slide->image()->forceDelete();
    }
}
