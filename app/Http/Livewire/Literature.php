<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\News;
use Livewire\Component;

class Literature extends Component
{
    public $articles = [];

    public function mounted()
    {
        $this->articles = Article::orderBy('is_homepage')->limit(2)->get();
    }

    public function render()
    {
        return view('livewire.literature');
    }
}
