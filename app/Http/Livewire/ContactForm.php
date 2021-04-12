<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        // validate
        $attr = $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        // save in the database
            // Contact::create($attr);
    }
}
