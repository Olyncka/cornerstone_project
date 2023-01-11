<?php

namespace App\Http\Livewire\Admin\GestionAgent;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class ListeAgent extends Component
{
    public function delete($id)
    {
        $residence=User::find($id);
            $destination = 'storage/'.$residence->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
            $residence->delete();
    }

    public function render()
    {
        $data=[
            "users" =>User::where('id', '!=', Auth::user()->id)->get(),
        ];
        return view('livewire.admin.gestion-agent.liste-agent',$data)->layout('layouts.admin.main');
    }
}
