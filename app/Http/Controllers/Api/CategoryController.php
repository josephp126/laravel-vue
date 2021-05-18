<?php

namespace App\Http\Controllers\Api;

use App\Api\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Http\Requests\Api\CategoryStoreRequest;
use App\Http\Resources\Api\CategoryResource;
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
        $categories = Category::where('parent_id', $request->get('parent_id'))->get();

        return CategoryResource::collection($categories);
    }

    public function saveSort(Request $request)
    {
        $ids = $request->get('ids');

        foreach ($ids as $sort => $id) {
            Category::find($id)->update(compact('sort'));
        }

        return response()->json(['status' => true]);
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
