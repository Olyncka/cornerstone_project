<?php

namespace App\Http\Livewire\Admin\GestionArticle;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Str;


class ArticleUpdateComponent extends Component
{
    public $name;
    public $slug;
    public $residence_id;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function mount($slug)
    {
        $item=Article::where('slug',$slug)->first();
        $this->name = $item->name;
        $this->slug = $item->slug;
    }
    public function render()
    {
        return view('livewire.admin.gestion-article.article-update-component')->layout('layouts.admin.main');
    }
}
