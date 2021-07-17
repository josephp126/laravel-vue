<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

//use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $products = Product::paginate($request->get('perPage', 50));
        return view('admin.product.index', compact('products'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function create(Request $request)
    {
        return view('admin.product.create');
    }

    /**
     * @param ProductStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ProductStoreRequest $request)
    {
        $product = Product::create($request->validated());

        $request->session()->flash('admin.product.id', $product->id);

        return redirect()->route('admin.product.index');
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return Application|Factory|View
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return Application|Factory|View
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * @param ProductUpdateRequest $request
     * @param Product              $product
     * @return RedirectResponse
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->update($request->validated());

        $request->session()->flash('admin.product.id', $product->id);

        return redirect()->route('admin.product.index');
    }

    public function activeToggle(Product $product)
    {
        $product->update(['active' => !$product->active]);

        return redirect()->route('admin.product.index');
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
