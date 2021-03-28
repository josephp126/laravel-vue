<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name'    => 'required',
        'email'   => 'required',
        'message' => 'required',
    ];

    public function saveContact()
    {
        $validated = $this->validate();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.contact-form');
    }
}
