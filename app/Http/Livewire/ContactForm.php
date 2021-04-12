<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $session;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        // validate
        $attr = $this->validate();

        // save in the database
        // Contact::create($attr);

        //session msg first way

        // session()->flash('message', 'contact message sent');

        //session msg control with state
        $this->session = 'contact message sent';
    }
}
