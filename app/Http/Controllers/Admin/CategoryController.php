<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = Category::paginate(categories)->get();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('category.create');
    }

    /**
     * @param CategoryStoreRequest $request
     * @return Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->validated());

        $request->session()->flash('category.id', $category->id);

        return redirect()->route('category.index');
    }

    /**
     * @param Request  $request
     * @param Category $category
     * @return Response
     */
    public function show(Request $request, Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * @param Request  $request
     * @param Category $category
     * @return Response
     */
    public function edit(Request $request, Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * @param CategoryUpdateRequest $request
     * @param Category              $category
     * @return Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->validated());

        $request->session()->flash('category.id', $category->id);

        return redirect()->route('category.index');
    }

    /**
     * @param Request  $request
     * @param Category $category
     * @return Response
     */
    public function destroy(Request $request, Category $category)
    {
        $category->delete();

        return redirect()->route('category.index');
    }
}
