<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavDropdownItem extends Component
{
    public $href = '';
    public $label = '';
    public $image = '';

    public function render()
    {
        return view('livewire.nav-dropdown-item');
    }
}
