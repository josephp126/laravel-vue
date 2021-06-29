<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        $news = News::paginate();

        return view('news.index', compact('news'));
    }

    /**
     * @param Request $request
     * @param News    $news
     * @return Application|Factory|View|Response
     */
    public function show(Request $request, News $news)
    {
        return view('news.show', compact('news'));
    }
}
