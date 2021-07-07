<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Contact;


class ContactForm extends Component
{
    public $first_name;
    public $last_name;
    public $organization;
    public $phone;
    public $content;
    public $reference;
    public $email;

    public function submit()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => '',
            'organization' => '',
            'phone' => '',
            'content' => 'required',
            'reference' => '',
            'email' => 'required|email',
            
        ]);
        // dd($validatedData);
        Contact::create($validatedData);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
