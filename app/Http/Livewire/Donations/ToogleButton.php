<?php

namespace App\Http\Livewire\Donations;

use App\Models\Donateur;
use App\Models\Needs;
use Livewire\Component;

class ToogleButton extends Component
{
    public Needs $item;
    public string $name;
    public bool $status;

    public function mount()
    {
        $this->status = $this->item->getAttribute('status');
    }
    public function render()
    {
        return view('livewire.donations.toogle-button');
    }

    public function updating($name,$value)
    {
        $this->item->setAttribute($name, $value)->save();
    }
}
