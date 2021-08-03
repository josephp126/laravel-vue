<?php

namespace App\Http\Controllers\Api;

use App\Api\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Http\Requests\Api\CategoryStoreRequest;
use App\Http\Resources\Api\CategoryResource;
use App\Jobs\SaveImageJob;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;


class CategoryController extends Controller
{
    /**
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        return Category::childrenRecursively($request->get('parent_id'))->get();
    }

    public function image(Request $request, Category $category)
    {
        abort_if(!$request->hasFile("image"), 422, 'missing_file');

        $this->dispatch(new SaveImageJob($category, $request->file('image')));

        return redirect()->back();
    }

    public function all(Request $request, $parent_id = null)
    {
        if (($id = $request->get('id')) !== null) {
            return Category::with(['image', 'products', 'sub_categories'])->find($id);
        }
        return Category::childrenRecursively($parent_id)->with('image')->get();
    }

    public function saveSort(Request $request)
    {
        $ids = $request->get('ids', []);

        foreach ($ids as $order => $id) {
            Category::find($id)->update(compact('order'));
        }

        return response()->noContent();
    }

    /**
     * @param CategoryStoreRequest $request
     * @return CategoryResource
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->validated());

        return new CategoryResource($category);
    }

    /**
     * @param Request  $request
     * @param Category $category
     * @return CategoryResource
     */
    public function show(Request $request, Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * @param CategoryUpdateRequest $request
     * @param Category              $category
     * @return CategoryResource
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->validated());

        return new CategoryResource($category);
    }

    /**
     * @param Request  $request
     * @param Category $category
     * @return Response
     */
    public function destroy(Request $request, Category $category)
    {
        $category->delete();

        return response()->noContent();
    }
}
