<?php

namespace App\Http\Livewire\Admin\GestionArticle;

use App\Models\Article;
use App\Models\Residence;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;


class ArticleAddComponent extends Component
{
    public $name;
    public $slug;
    public $quantity;
    public $residence_id;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function mount()
    {
        $res=Residence::where('user_id',Auth::user()->id)->first();
        $this->name =$res->name;
        $this->residence_id =$res->id;
    }
    public function addItem()
    {
        // dd('hiiii');
        $this->validate([
            'name'=>'required|unique:residences,name',
            'slug'=>'required|unique:residences,slug',
            'quantity'=>'required|integer',

        ],[
            'name.required'=>'Enter the Name',
            'name.unique'=>'The name already exists ',
            'quantity.required'=>'Enter the quantity',

        ]);
        $item=new Article();
        $item->name=$this->name;
        $item->slug=$this->slug;
        $item->quantity=$this->quantity;
        $item->residence_id=$this->residence_id;
        $item->user_id=Auth::user()->id;


        if($item->save()){
            return redirect()->route('admin.article.list')->with('showsucces',['message'=>'Need added Successfully']);
            // $this->dispatchBrowserEvent;

        }else{
            $this->dispatchBrowserEvent('showerror',['message'=>'Erreur d\'ajouter un article']);
        }
    }

    public function render()
    {

            $reside=Residence::all();
        return view('livewire.admin.gestion-article.article-add-component',["reside"=>$reside])->layout('layouts.admin.main');
    }
}
