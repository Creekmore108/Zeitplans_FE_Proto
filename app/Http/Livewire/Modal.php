<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;
    Public $hide = true;

    protected $listeners = [
        'show' => 'show',
        'hide' => 'hide'
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
