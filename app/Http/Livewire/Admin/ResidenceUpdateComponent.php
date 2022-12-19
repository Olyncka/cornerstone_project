<?php

namespace App\Http\Livewire\Admin;

use App\Models\Residence;
use Livewire\Component;
use Livewire\WithFileUploads;

class ResidenceUpdateComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $adresse;
    public $description;

    public function mount($slug)
    {
        $residence=Residence::find($slug);
        $this->name = $residence->name;
        $this->slug = $residence->slug;
        $this->adresse = $residence->adresse;
        $this->description = $residence->description;
    }
    
    public function render()
    {
        return view('livewire.admin.residence-update-component')->layout('layouts.admin.main');
    }
}
