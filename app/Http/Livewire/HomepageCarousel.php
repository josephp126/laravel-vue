<?php

namespace App\Http\Livewire;

use App\Models\Carousel;
use Livewire\Component;

class HomepageCarousel extends Component
{
    public $carousel = null;
    public $slide_count = 0;
    public $slides = [];

    public function mount()
    {
        $carousel = $this->carousel = Carousel::where('slug', 'homepage')->first();
        if($carousel) {
            $slides = $this->slides = $carousel->slides;
            $this->slide_count = $slides->count();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.homepage-carousel');
    }
}
