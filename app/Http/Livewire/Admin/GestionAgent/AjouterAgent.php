<?php

namespace App\Http\Livewire\Admin\GestionAgent;

use App\Models\Residence;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AjouterAgent extends Component
{
    use WithFileUploads;
    public $residence_id;
    public $name;
    public $image;
    public $email;

    public function addUser()
    {
        // dd('hiiii');
        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg|max:5048',
            'residence_id'=>'required',

        ],[
            'name.required'=>'Entrer le Nom',
            'name.regex'=>'Pas de caractères spéciaux',
            'image.required'=>'Please insert an image',

        ]);
        $user=new User();
        $user->name=$this->name;
        $user->email=$this->email;
        $user->residence_id=$this->residence_id;
        $user->role_id=2;
        $user->password=Hash::make("12345678");
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
            $imagePath = $this->image->storeAs('images/users', $filenametostore);
            $user->image=$imagePath;
        }

        if($user->save()){
            $this->dispatchBrowserEvent('showsucces',['message'=>'Un chef de residence a été ajouté avec Succès']);
            return redirect()->route('admin.chefderesidence.list');
        }else{
            $this->dispatchBrowserEvent('showerror',['message'=>'Erreur d\'ajouter un Client']);
        }
    }

    public function render()
    {
        $data=[
            "residences"=>Residence::all(),
        ];
        return view('livewire.admin.gestion-agent.ajouter-agent',$data)->layout('layouts.admin.main');
    }
}
