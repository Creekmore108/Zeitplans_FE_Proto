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
        $this->validate([
            'first_name' => 'required',
            'last_name' => '',
            'organization' => '',
            'phone' => '',
            'content' => 'required',
            'reference' => '',
            'email' => 'required|email',
            
        ]);
        
        Contact::create([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'organization' => $this->organization,
            'phone' => $this->phone,
            'content' => $this->content,
            'reference' => $this->reference,
            'email' => $this->email,
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
