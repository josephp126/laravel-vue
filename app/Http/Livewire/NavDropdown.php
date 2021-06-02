<?php

namespace App\Http\Livewire;

use App\Traits\Livewire\IsActiveProperty;
use Livewire\Component;

class NavDropdown extends Component
{
    use IsActiveProperty;

    public $title = '';
    public $navItems = [];

    public function render()
    {
        return view('livewire.nav-dropdown');
    }
}
