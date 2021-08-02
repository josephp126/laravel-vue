<?php

namespace App\Http\Controllers\Api;

use App\Api\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Http\Requests\Api\CategoryStoreRequest;
use App\Http\Resources\Api\CategoryResource;
use App\Http\Resources\CategoryProductResource;
use App\Http\Resources\Api\ProductResource;
use App\Models\Category;
use App\Models\CategoryImage;
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
        $categories = Category::where('parent_id', $request->get('parent_id'))->ordered()->get();

        for ($i = 0; $i < count($categories);$i++)
        {
            $sub_categories = Category::where('parent_id',$categories[$i]->id)->ordered()->get();
            $categories[$i]->subcategories = count($sub_categories);
            unset($sub_categories);
        }
        //$categories->sub_categories = $subcategories;
        return $categories;
        //return CategoryResource::collection($categories);
    }
    public function image(Request $request)
    {
        if($request->hasFile("image"))
        {
            $file = $request->file("image");
            $name = "IMG_".time().".".$file->guessExtension();
            $ruta = public_path("images/categories/".$name);
            copy($file,$ruta);
            (new \App\Models\CategoryImage)->upImage($name, $request->input('category_id'));
            return redirect('admin/category');
        }
        else
        {
            dd("ERROR");
        }
    }
    public function all(Request $request,$parent = '')
    {
        $data = array();
        if(empty($parent))
            $categories = Category::all()->where('parent_id',null);
        else {
            $categories = Category::all()->where('parent_id', $parent);
        }

        foreach ($categories as $category) {
        $data[] = [
            'id'                   => $category->id,
            'name'                 => $category->name,
            'parent_id'            => $category->parent_id,
            'order'                => $category->order,
            'updated_at'           => $category->updated_at,
            'updated_at_formatted' => $category->updated_at->format(config('app.formats.table_datetime')),

            'products'       => ProductResource::collection($category->products),
            'sub_categories' => CategoryController::all($request,$category->id),
        ];
        }
        return $data;
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
