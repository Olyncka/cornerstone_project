<?php

namespace App\Http\Livewire\Admin;

use App\Models\Items;
use Livewire\Component;

class ItemUpateComponent extends Component
{
    public function mount($slug)
    {
        $item=Items::where('slug',$slug)->first();
        $this->name = $item->name;
        $this->slug = $item->slug;
    }
    public function render()
    {
        return view('livewire.admin.item-upate-component')->layout('layouts.admin.main');
    }
}
