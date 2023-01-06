<?php

namespace App\Http\Livewire\Admin;

use App\Models\Needs;
use Livewire\Component;

class DonateComponent extends Component
{

    public function store()
    {
            
    }
    public function render()
    {
        return view('livewire.admin.donate-component')->layout('layouts.admin.main');
    }
}
