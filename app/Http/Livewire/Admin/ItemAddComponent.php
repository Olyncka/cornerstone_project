<?php

namespace App\Http\Livewire\Admin;

use App\Models\Items;
use Livewire\Component;
use Illuminate\Support\Str;


class ItemAddComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function addItem()
    {
        // dd('hiiii');
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:residences,slug',

        ],[
            'name.required'=>'Entrer le Nom',
            'name.regex'=>'Pas de caractères spéciaux',

        ]);
        $item=new Items();
        $item->name=$this->name;
        $item->slug=$this->slug;


        if($item->save()){
            return redirect()->route('item.list')->with('showsucces',['message'=>'Item a été ajouté avec Succès']);
            // $this->dispatchBrowserEvent;

        }else{
            $this->dispatchBrowserEvent('showerror',['message'=>'Erreur d\'ajouter un Client']);
        }
    }

    public function render()
    {
        return view('livewire.admin.item-add-component')->layout('layouts.admin.main');
    }
}
