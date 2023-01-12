<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\Donateur;
use App\Models\Items;
use App\Models\Needs;
use App\Models\Residence;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashbordComponent extends Component
{
    public function render()
    {
        $data=[
            "residencesCount"=>Residence::count(),
            "usersCount"=>User::where('id', '!=', Auth::user()->id)->count(),
            "itemsCount"=>Article::count(),
            "donatorsCount"=>Needs::where('status',1)->count(),

        ];
        return view('livewire.admin.dashbord-component',$data)->layout('layouts.admin.main');
    }
}
