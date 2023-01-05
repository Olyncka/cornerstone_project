<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Items;
use App\Models\Needs;
use App\Models\Residence;
use Illuminate\Support\Collection;
use Livewire\Component;

class DonateComponent extends Component
{
    public $name;
    public $email;
    public $adresse;
    public $residence_id;
    public $item_id;
    public $itemsForm=[];
    public $itemsDB;
    public $itemsData=[''];
    public $quantity;
    public $i = 1;
    public $don_name;
    public $don_email;
    public $don_phone;
    public $don_date;

    public $inputs=[];
    public $inputsCount=1;

    public function mount($id)
    {
        $res=Residence::where('id',$id)->first();
        $this->name =$res->name;
        $this->residence_id =$res->id;
        $this->itemsDB=Article::where('residence_id',$this->residence_id)->get();
    }

    public function fillItem()
    {
        // $this->itemsData[]='';
        $this->inputsCount++;
    }
    public function removeItem()
    {
        // unset($this->itemsData[$index]);
        // $this->itemsData=array_values($this->itemsData);
        $this->inputsCount--;
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
        Needs::create([
            'item_id' => $value['item_id'],
            'quantity' => $value['quantity']
        ]);
    }


    $this->inputs = [];

    $this->resetInputFields();

    session()->flash('message', 'Contact Has Been Created Successfully.');
    }
    public function render()
    {
        $data=[
            "items"=>Article::where('residence_id',$this->residence_id)->get(),
            "residences"=>Residence::findOrFail($this->residence_id),
            // "itemsForm"=>$this->itemsForm
        ];
        return view('livewire.donate-component',$data)->layout('layouts.donate');
    }
}
