<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $label;
    public $value;
    public $help;
    public $nameHelp;
    public $required;
    public $error;
    public $placeholder;

//    public function mount(
//        $name,
//        $label = '',
//        $placeholder = '',
//        $help = false,
//        $value = '',
//        $type = 'text',
//        $required = false
//    ) {
//        $this->nameHelp = "{$name}Help";
//        $this->fill(compact('label', 'value', 'type', 'required', 'help', 'placeholder'));
//    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('livewire.input');
    }
}
