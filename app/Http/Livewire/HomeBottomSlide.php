<?php

namespace App\Http\Livewire;

use App\Models\Slide;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class HomeBottomSlide extends Component
{
    public $sliders = [];

    public function mount()
    {
        $sliders = Slide::get();
        foreach ($sliders as $key => $value) {
            $value->path = Storage::url($value->link);
        }
        $this->sliders = $sliders;
    }

    public function render()
    {
        return view('livewire.home-bottom-slide');
    }
}
