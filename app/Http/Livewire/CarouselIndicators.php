<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CarouselIndicators extends Component
{
    public $carousel_id = 'carousel';
    public $count = 1;
    public $active = 0;

    public function render()
    {
        $lines = ['<ul class="carousel-indicators">'];
        $carousel_id = $this->carousel_id;

        foreach(range(0, $this->count-1) as $inc => $row){
            $class = $this->active == $inc? 'active': '';

            $lines[] = "<li data-target=\"#{$carousel_id}\" data-slide-to=\"{$inc}\" class=\"{$class}\"></li>";
        }

        $lines[] = '</ul>';

        return implode('', $lines);
    }
}
