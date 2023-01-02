<?php

namespace App\Http\Livewire\Admin;

use App\Models\Residence;
use Illuminate\Support\Str;


use Livewire\Component;
use Livewire\WithFileUploads;

class ResidenceAddComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $adresse;
    public $description;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function addResidence()
    {
        // dd('hiiii');
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:residences,slug',
            'adresse'=>'required|max:250',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg|max:5048',
            'description'=>'required',

        ],[
            'name.required'=>'Entrer le Nom',
            'name.regex'=>'Pas de caractères spéciaux',
            'image.required'=>'Please insert an image',

        ]);
        $residence=new Residence();
        $residence->name=$this->name;
        $residence->slug=$this->slug;
        $residence->adresse=$this->adresse;
        $residence->description=$this->description;
        if($this->image !=null){
            //get filename with extension
            $filenamewithextension = $this->image->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $this->image->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            //Upload File
            $imagePath = $this->image->storeAs('images/residences', $filenametostore);
            $residence->image=$imagePath;

        }

        if($residence->save()){
            $this->dispatchBrowserEvent('showsucces',['message'=>'Le Client a été ajouté avec Succès']);
            return redirect()->route('admin.residence.list');
        }else{
            $this->dispatchBrowserEvent('showerror',['message'=>'Erreur d\'ajouter un Client']);
        }
    }
    public function render()
    {
        return view('livewire.admin.residence-add-component')->layout('layouts.admin.main');
    }
}
