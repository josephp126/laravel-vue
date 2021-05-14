<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $products = Product::paginate(products)->get();

        return view('products.index', compact('products'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('product.create');
    }

    /**
     * @param ProductStoreRequest $request
     * @return Response
     */
    public function store(ProductStoreRequest $request)
    {
        $product = Product::create($request->validated());

        $request->session()->flash('product.id', $product->id);

        return redirect()->route('product.index');
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function show(Request $request, Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function edit(Request $request, Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * @param ProductUpdateRequest $request
     * @param Product              $product
     * @return Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->update($request->validated());

        $request->session()->flash('product.id', $product->id);

        return redirect()->route('product.index');
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function destroy(Request $request, Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
