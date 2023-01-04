<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\Donateur;
use App\Models\Items;
use App\Models\Residence;
use App\Models\User;
use Livewire\Component;

class DashbordComponent extends Component
{
    public function render()
    {
        $data=[
            "residencesCount"=>Residence::count(),
            "usersCount"=>User::count(),
            "itemsCount"=>Article::count(),
            "donatorsCount"=>Donateur::count(),

        ];
        return view('livewire.admin.dashbord-component',$data)->layout('layouts.admin.main');
    }
}
