<?php

namespace App\Http\Livewire\Admin\GestionArticle;

use App\Models\Article;
use Livewire\Component;

class ArticleListComponent extends Component
{
    public function render()
    {
        $data=[
            "allitems" =>Article::all(),
        ];
        return view('livewire.admin.gestion-article.article-list-component',$data)->layout('layouts.admin.main');
    }
}
