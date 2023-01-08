<?php

namespace App\Http\Livewire\Gerant\Donations;

use App\Models\Needs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListDonationComponent extends Component
{
    public function render()
    {
        $data=[
            "donations"=>Needs::whereIn('needs.residence_id',(function ($query) {
                $query->from('residences')
                ->select('residences.id')
                    ->crossJoin('users')
                    ->where('residences.id','=',DB::raw('users.residence_id'))
                    ->where('users.id','=',Auth::user()->id);
            }))
            ->with('residences','articles','donateurs')
            ->get(),
        ];
        return view('livewire.gerant.donations.list-donation-component',$data)->layout('layouts.gerant.main');
    }
}
