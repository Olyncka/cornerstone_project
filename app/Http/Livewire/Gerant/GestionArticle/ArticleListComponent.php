<?php

namespace App\Http\Livewire\Gerant\GestionArticle;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ArticleListComponent extends Component
{
    public function render()
    {
        $data=[
            "allitems" =>Article::where('user_id',Auth::user()->id)->get(),
        ];
        return view('livewire.gerant.gestion-article.article-list-component',$data)->layout('layouts.gerant.main');
    }
}
