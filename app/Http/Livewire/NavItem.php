<?php

namespace App\Http\Livewire;

use App\Traits\Livewire\IsActiveProperty;
use Livewire\Component;

class NavItem extends Component
{
    use IsActiveProperty;

    public $title = '';
    public $href = '';

    public function mount($title, $href)
    {
        $this->title = $title;
        $this->href  = $href;

        $this->navItems = [$href => true];
    }

    public function render()
    {
        return view('livewire.nav-item');
    }
}
