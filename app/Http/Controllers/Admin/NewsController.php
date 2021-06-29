<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Jobs\SaveImageJob;
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
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $news = News::paginate($request->get('perPage', 50));

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return RedirectResponse
     */
    public function store(NewsRequest $request)
    {
        $news = News::create($request->validated());

        $this->dispatch(new SaveImageJob($news, $request->file('file')));

        session()->flash('admin.news.created');
        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return View
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return View
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function star(Request $request, News $news)
    {
        if ($request->input('action') === 'star') {
            $news->update(['is_homepage' => !$news->is_homepage]);
            session()->flash('admin.news.updated');
        }

        return redirect()->route('admin.news.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param News        $news
     * @return RedirectResponse
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->validated());

        $this->dispatch(new SaveImageJob($news, $request->file('file')));

        session()->flash('admin.news.updated');
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(News $news)
    {
        $news->delete();

        session()->flash('admin.news.deleted');
        return redirect()->route('admin.news.index');
    }
}
