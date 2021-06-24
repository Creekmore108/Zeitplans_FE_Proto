<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;

    protected $listeners = [
        'show' => 'false'
    ];

    public function show()
    {
        $this->show = true;
    }

    public function hide()
    {
        $this->show = false;
    }
}
