<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ResidenceListComponent extends Component
{
    public $number=0;
    public function addmore()
    {
        $this->number+=1;
    }
    public function render()
    {
        return view('livewire.admin.residence-list-component')->layout('layouts.admin.main');
    }
}
