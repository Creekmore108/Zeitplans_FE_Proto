<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Contact;

class ContactForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $organization;
    public $phone;
    public $content;
    public $reference;

    public function submit()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => '',
            'email' => 'required|email',
            'organization' => '',
            'phone' => '',
            'content' => 'required',
            'reference' => '',
        ]);

        Contact::create($validatedData);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
