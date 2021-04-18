<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class HomeNewsList extends Component
{
    public $articles = [];

    public function mount()
    {
        $this->articles = News::with('image')->orderBy('is_homepage', 'desc')->orderBy('updated_at', 'desc')->limit(2)->get();
    }

    public function render()
    {
        return view('livewire.home-news-list');
    }
}
