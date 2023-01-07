<?php

namespace App\Http\Livewire\Donations;

use App\Models\Donateur;
use Livewire\Component;

class ToogleButton extends Component
{
    public Donateur $item;
    public string $name;
    public bool $featured;

    public function mount()
    {
        $this->featured = $this->item->getAttribute('featured');
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
