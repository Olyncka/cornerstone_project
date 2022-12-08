<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.home')->layout('layouts.app');
    }
}
