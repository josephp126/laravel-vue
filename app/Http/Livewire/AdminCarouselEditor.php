<?php

namespace App\Http\Livewire;

use App\Models\Carousel;
use Illuminate\View\View;
use Livewire\Component;

class AdminCarouselEditor extends Component
{
    public $slides = [];
    public $carousel_id = null;
    public $carousel = [];

    public function mount($carousel_id)
    {
        $this->carousel_id = $carousel_id;
        $this->carousel    = Carousel::find($carousel_id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('livewire.admin-carousel-editor');
    }
}
