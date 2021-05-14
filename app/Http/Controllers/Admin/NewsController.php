<?php

namespace App\Http\Controllers\Admin;

use App\Admin\IsHomepage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsStoreRequest;
use App\Http\Requests\Admin\NewsUpdateRequest;
use App\Http\Resources\Admin\NewsCollection;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\Admin\NewsCollection
     */
    public function index(Request $request)
    {
        $news = News::paginate();

        return new NewsCollection($news);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('news.create');
    }

    /**
     * @param \App\Http\Requests\Admin\NewsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStoreRequest $request)
    {
        $news = News::create($request->validated());

        $request->session()->flash('news.id', $news->id);

        return redirect()->route('news.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * @param \App\Http\Requests\Admin\NewsUpdateRequest $request
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request, News $news)
    {
        $news->update($request->validated());

        $request->session()->flash('news.id', $news->id);

        return redirect()->route('news.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, News $news)
    {
        $news->delete();

        return redirect()->route('news.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function star(Request $request)
    {
        $request->session()->flash('admin.news.updated', $admin->news->updated);

        $isHomepage->update([]);

        return redirect()->route('admin.news.index');
    }
}
