<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Modal;

class JobSearchModal extends Modal
{
    public function render()
    {
        return view('livewire.job-search-modal');
    }
}
