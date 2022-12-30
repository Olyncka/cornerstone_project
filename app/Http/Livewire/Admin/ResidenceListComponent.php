<?php

namespace App\Http\Livewire\Admin;

use App\Models\Residence;
use Livewire\Component;

class ResidenceListComponent extends Component
{
    
    public function render()
    {
        $data=[
            "allresidences" =>Residence::all(),
        ];
        return view('livewire.admin.residence-list-component',$data)->layout('layouts.admin.main');
    }
}
