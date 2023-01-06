<?php

namespace App\Http\Livewire\Admin\GestionAgent;

use App\Models\Residence;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class ModifierAgent extends Component
{
    use WithFileUploads;
    public $residence_id;
    public $name;
    public $image;
    public $email;
    public function mount($id)
    {
        
        $user=User::where('id',$id)->first();

        $this->name = $user->name;
        $this->email = $user->email;
        $this->residence_id = $user->residence_id;
        $this->image = $user->image;
    }
    public function render()
    {
        $data=[
            "residences"=>Residence::all(),
        ];
        return view('livewire.admin.gestion-agent.modifier-agent',$data)->layout('layouts.admin.main');
    }
}
