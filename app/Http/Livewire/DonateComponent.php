<?php

namespace App\Http\Livewire;

use App\Models\Needs;
use App\Models\Residence;
use Livewire\Component;

class DonateComponent extends Component
{
    public $nom;
    public $email;
    public $adresse;
    public $residence_id;
    public $item_id;
    public $quantity;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {

        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function addDonation()
    {
        $validatedDate = $this->validate([
            'item.0' => 'required',
            'quantity.0' => 'required',
            'item.*' => 'required',
            'quantity.*' => 'required',
        ],
        [
            'item.0.required' => 'name field is required',
            'quantity.0.required' => 'phone field is required',
            'item.*.required' => 'name field is required',
            'quantity.*.required' => 'phone field is required',
        ]
    );

    foreach ($this->name as $key => $value) {
        Needs::create(['name' => $this->name[$key], 'phone' => $this->phone[$key]]);
    }

    $this->inputs = [];

    $this->resetInputFields();

    session()->flash('message', 'Contact Has Been Created Successfully.');
    }
    public function render()
    {
        $data=[
            "residences"=>Residence::all(),
        ];
        return view('livewire.donate-component',$data)->layout('donate');
    }
}
