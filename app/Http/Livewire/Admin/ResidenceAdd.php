<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ResidenceAdd extends Component
{
    public $name;
    public $adresse;
    public function addResidence()
    {
        $this->validate([
            'name'=>'required|regex:/^[a-zA-Z]+$/u',
            'adresse'=>'required|max:250',
        ],[
            'name.required'=>'Entrer le Nom',
            'name.regex'=>'Pas de caractères spéciaux',

        ]);
        $client=new Client();
        $client->name=$this->name;
        $client->adresse=$this->adresse;
        $client->user_id=Auth::user()->id;

        if($client->save()){
            $this->dispatchBrowserEvent('showsucces',['message'=>'Le Client a été ajouté avec Succès']);
        }else{
            $this->dispatchBrowserEvent('showerror',['message'=>'Erreur d\'ajouter un Client']);
        }
    }
    public function render()
    {
        return view('livewire.admin.residence-add')->layout('layouts.admin.main');;
    }
}
