<?php

namespace App\Http\Livewire;

use App\Models\Slide;
use Livewire\Component;

class HomeBottomSlide extends Component
{
    public $sliders = [];

    public function mount()
    {
        $this->sliders = Slide::sorted()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.home-bottom-slide');
    }
}
