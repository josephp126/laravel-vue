<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class HomeNewsList extends Component
{
    public $articles = [];

    public function mount()
    {
        $this->articles = News::orderBy('is_homepage')->orderBy('created_at', 'desc')->limit(2)->get();
    }

    public function render()
    {
        return view('livewire.home-news-list');
    }
}
