<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\CategoryController;
use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\Product;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        $c = new CategoryController();
        $category = new Category();
        $category_id    = $request->get('type', 1);
        $categories       = $c->all($request,'');
        if($request->get('sub_type') !== null)
        {
            $subcategory_id = $request->get('sub_type', $categories->id ?? '');
        }
        else
        {
            $subcategory_id = 0;
        }
        abort_if(!$categories, 404);
        if($request->get('sub_type') !== null) {
            $auxs = $category->all()->where('parent_id', $_GET["sub_type"]);
            foreach ($auxs as $aux)
            {
                $categoryShow[] = $aux;
            }
            for($i = 0;$i < count($categoryShow);$i++)
            {
                $auxs = CategoryImage::all()->where('category_id',$categoryShow[$i]->id);
                foreach ($auxs as $aux){
                    $categoryShow[$i]->img = $aux->image_url;
                }
            }
        }
        else
        {
            $categoryShow = new Category();
        }
        $products = Product:: all()->where('id',1);

        return view('product.index', compact('category_id','categoryShow','categories', 'subcategory_id','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $product = Product::create(
            $request->validate(
                [
                    // TODO :: validation here
                ]
            )
        );

        session()->flash('Product.created');
        return redirect()->route('Product.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $product->update(
            $request->validate(
                [
                    // TODO :: validation here
                ]
            )
        );

        session()->flash('Product.updated');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        session()->flash('Product.deleted');
        return redirect()->route('Product.index');
    }
}
