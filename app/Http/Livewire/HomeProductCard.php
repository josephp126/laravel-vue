<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeProductCard extends Component
{
    public $image;
    public $title;
    public $description;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.home-product-card');
    }
}
