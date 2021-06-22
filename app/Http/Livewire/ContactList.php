<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmailList;

class ContactList extends Component
{
    public $email; 

    public function submit()
    {
    $validatedData = $this->validate([
        'email' => 'required|email',
    ]);

    EmailList::create($validatedData); 

    return redirect('/');
    }


}
