<?php

namespace App\Http\Livewire\Admin;

use App\Models\Residence;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class ResidenceUpdateComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $newimage;
    public $adresse;
    public $description;
    public $residence_id;
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function mount($slug)
    {
        $residence=Residence::where('slug',$slug)->first();

        $this->name = $residence->name;
        $this->slug = $residence->slug;
        $this->adresse = $residence->adresse;
        $this->image = $residence->image;
        $this->description = $residence->description;
        $this->residence_id = $residence->id;
    }

    public function updateResidence()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:residences,slug',
            'adresse'=>'required|max:250',
            'description'=>'required',

        ],[
            'name.required'=>'Entrer le Nom',
            'name.regex'=>'Pas de caractères spéciaux',

        ]);

        $residence = Residence::where('id',$this->residence_id)->first();
        $residence->name=$this->name;
        $residence->slug=$this->slug;
        $residence->adresse=$this->adresse;
        $residence->description=$this->description;
        if($this->newimage){
            $destination = 'storage/'.$residence->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $this->validate([
                'newimage'=>'nullable|mimes:jpg,png,jpeg,gif,svg|max:5048',

             ],[
                'newimage.required'=>'Televerser une Image',
                'newimage.mimes'=>'Choisissez une image de Type Jpg,png',
                'newimage.max'=>'Une Image inferieur a 5M',
             ]);
             $filenamewithextension = $this->newimage->getClientOriginalName();
             //get filename without extension
             $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
             //get file extension
             $extension = $this->newimage->getClientOriginalExtension();
             //filename to store
             $filenametostore = $filename.'_'.time().'.'.$extension;
             //Upload File
             $imagePath = $this->newimage->storeAs('images/residences', $filenametostore);
             // $imagePath =$this->image->store('upload','public');
            $residence->Image=$imagePath;
        }


        if($residence->update()){
            $this->dispatchBrowserEvent('showsucces',['message'=>'L\'Utilisateur a ete modifie avec Succes']);
            return redirect()->route('admin.residence.list');

        }else{
            $this->dispatchBrowserEvent('showerror',['message'=>'Erreur de modification de l\'Utilisateur']);

        }

    }

    public function render()
    {
        return view('livewire.admin.residence-update-component')->layout('layouts.admin.main');
    }
}
