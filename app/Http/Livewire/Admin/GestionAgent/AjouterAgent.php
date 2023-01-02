<?php

namespace App\Http\Livewire\Admin\GestionAgent;

use Livewire\Component;

class AjouterAgent extends Component
{
    public function render()
    {
        return view('livewire.admin.gestion-agent.ajouter-agent')->layout('layouts.admin.main');
    }
}
