<?php

namespace App\Http\Controllers;

use App\Models\News;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return View
     */
    public function index(Request  $request)
    {
        $data = News::paginate($request->get('perPage', 50));

        return view('news.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  News  $news
     * @return View
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
