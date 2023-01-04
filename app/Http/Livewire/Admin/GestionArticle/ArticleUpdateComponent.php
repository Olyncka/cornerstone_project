<?php

namespace App\Http\Livewire\Admin\GestionArticle;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;


class ArticleUpdateComponent extends Component
{
    public $name;
    public $slug;
    public $residence_id;
    public $article_id;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function mount($slug)
    {
        $item=Article::where('slug',$slug)->first();
        $this->name = $item->name;
        $this->slug = $item->slug;
        $this->article_id = $item->id;
    }
    public function updateArticle()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:residences,slug',

        ],[
            'name.required'=>'Entrer le Nom',
            'name.regex'=>'Pas de caractères spéciaux',

        ]);
        $item=Article::where('id',$this->article_id)->first();
        $item->name=$this->name;
        $item->slug=$this->slug;
        $item->residence_id=$this->residence_id;
        $item->user_id=Auth::user()->id;


        if($item->update()){
            $this->dispatchBrowserEvent('showsucces',['message'=>"L'article a ete modifie"]);
            return redirect()->route('admin.article.list');

        }else{
            $this->dispatchBrowserEvent('showerror',['message'=>'Erreur de modification de l\'Utilisateur']);

        }
    }
    public function render()
    {
        return view('livewire.admin.gestion-article.article-update-component')->layout('layouts.admin.main');
    }
}
