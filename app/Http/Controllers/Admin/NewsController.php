<?php

namespace App\Http\Controllers\Admin;

use App\Admin\IsHomepage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsStoreRequest;
use App\Http\Requests\Admin\NewsUpdateRequest;
use App\Http\Resources\Admin\NewsCollection;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * @param Request $request
     * @return NewsCollection
     */
    public function index(Request $request)
    {
        $news = News::paginate();

        return new NewsCollection($news);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('news.create');
    }

    /**
     * @param NewsStoreRequest $request
     * @return Response
     */
    public function store(NewsStoreRequest $request)
    {
        $news = News::create($request->validated());

        $request->session()->flash('news.id', $news->id);

        return redirect()->route('news.index');
    }

    /**
     * @param Request $request
     * @param News    $news
     * @return Response
     */
    public function show(Request $request, News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * @param Request $request
     * @param News    $news
     * @return Response
     */
    public function edit(Request $request, News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * @param NewsUpdateRequest $request
     * @param News              $news
     * @return Response
     */
    public function update(NewsUpdateRequest $request, News $news)
    {
        $news->update($request->validated());

        $request->session()->flash('news.id', $news->id);

        return redirect()->route('news.index');
    }

    /**
     * @param Request $request
     * @param News    $news
     * @return Response
     */
    public function destroy(Request $request, News $news)
    {
        $news->delete();

        return redirect()->route('news.index');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function star(Request $request, News $news)
    {
//        $request->session()->flash('admin.news.updated', $admin->news->updated);

        $news->update(['is_homepage' => !$request->get('is_homepage', false)]);

        return redirect()->route('admin.news.index');
    }
}
