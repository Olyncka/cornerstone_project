<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DashbordComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dashbord-component')->layout('layouts.admin.main');
    }
}
