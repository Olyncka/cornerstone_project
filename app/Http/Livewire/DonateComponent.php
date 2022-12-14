<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonateComponent extends Component
{
    public $nom;
    public $email;
    public $adresse;
    public $residence_id;
    public $item_id;
    public $quantity;

    public function addDonation()
    {
        # code...
    }
    public function render()
    {
        return view('livewire.donate-component')->layout('donate');
    }
}
