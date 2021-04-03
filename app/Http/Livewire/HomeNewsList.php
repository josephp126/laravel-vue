<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class HomeNewsList extends Component
{
    public $articles = [];

    public function mount()
    {
        $this->articles = News::orderBy('is_homepage')->limit(2)->get();
    }

    public function render()
    {
        return view('livewire.home-news-list');
    }
}
