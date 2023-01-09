<?php

namespace App\Http\Livewire\Admin\Donations;

use App\Models\Needs;
use Livewire\Component;

class ListDonationComponent extends Component
{
    public function render()
    {
        $data=[
            "donations"=>Needs::with('residences','articles','donateurs')->get(),
        ];
        return view('livewire.admin.donations.list-donation-component',$data)->layout('layouts.admin.main');;
    }
}
