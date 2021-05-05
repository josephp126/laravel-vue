<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class HomeNewsList extends Component
{
    public $articles = [];

    public function mount()
    {
        $this->articles = News::with('image')->where('is_homepage', true)->orderBy('updated_at', 'desc')->limit(3)->get(
        );
    }

    public function render()
    {
        return view('livewire.home-news-list');
    }
}
