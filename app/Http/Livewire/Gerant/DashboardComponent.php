<?php

namespace App\Http\Livewire\Gerant;

use App\Models\Article;
use App\Models\Donateur;
use App\Models\Needs;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $data=[
            "itemsCount"=>Article::where('user_id',Auth::user()->id)->count(),
            "donatorsCount"=>Needs::where('user_id',Auth::user()->id)
            ->where('status',1)
            ->count(),

        ];
        return view('livewire.gerant.dashboard-component',$data)->layout('layouts.gerant.main');
    }
}
