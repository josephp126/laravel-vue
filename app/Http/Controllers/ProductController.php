<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $category_id    = $request->get('type', 1);
        $subcategory_id = $request->get('sub_type', null);
        $categories     = Category::childrenRecursively($request->get('parent_id'))->get();
        $categoryShow   = [];

        abort_if(!$categories, 404);

        if ($subcategory_id) {
            $categoryShow = Category::with(['products'])->where('parent_id', $subcategory_id)->get();
        } elseif ($category_id) {
            $categoryShow = Category::with(['products', 'image'])->where('id', $category_id)->get();
        }

        return view('product.index', compact('category_id', 'categoryShow', 'categories'));
    }

    public function details(Request $request, Product $product)
    {
        $category_id    = $request->get('type', 1);
        $categories     = Category::getChildrenRecursively();
        $subcategory_id = $request->get('sub_type', 0);
        $categoryShow   = [];

        abort_if(!$categories, 404);

        if ($subcategory_id) {
            $categoryShow = Category::with(['products'])->where('parent_id', $subcategory_id)->get();
        }

        return view('product.details', compact('product', 'category_id', 'categoryShow', 'categories', 'subcategory_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function show(Product $product, Request $request)
    {
        return view('product.show', compact('product'));
    }
}
