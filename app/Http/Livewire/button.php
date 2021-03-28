<?php

namespace App\Http\Livewire;

use Livewire\Component;

class button extends Component
{
    public $type;
    public $variant;
    public $label;

    public function mount($label, $type = null, $variant = null)
    {
        $this->fill(compact('type', 'variant', 'label') + [
            'type' => 'submit',
            'variant' => 'default',
        ]);
    }

    public function render()
    {
        return view('livewire.button');
    }
}
