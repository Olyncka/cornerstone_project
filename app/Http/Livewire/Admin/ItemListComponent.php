<?php

namespace App\Http\Livewire\Admin;

use App\Models\Items;
use Livewire\Component;

class ItemListComponent extends Component
{
    public function render()
    {
        $data=[
            "allitems" =>Items::all(),
        ];
        return view('livewire.admin.item-list-component',$data)->layout('layouts.admin.main');
    }
}
