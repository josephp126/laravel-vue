<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CarouselControl extends Component
{
    public $direction = '';
    public $carousel_id = 'carousel';

    public function render()
    {
        if (!$this->direction) {
            return null;
        }

        $carousel_id = $this->carousel_id;
        $direction   = $this->direction;
        $slide       = $this->direction == 'right' ? 'next' : 'prev';

        return <<<BLADE
             <a class="carousel-control-next {$direction} carousel-control" href="#{$carousel_id}" role="button" data-slide="{$slide}">
                <i class="icon-angle-{$direction}"></i>
            </a>
        BLADE;
    }
}
