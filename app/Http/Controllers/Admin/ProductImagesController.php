<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function index(Product $product)
    {
        return view('admin.gallery.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Product $product
     * @return Response
     */
    public function create(Product $product)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function store(Request $request, Product $product)
    {
        //
        return redirect()->route('admin.product.image.index', [$product]);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @param Image   $image
     * @return Response
     */
    public function show(Product $product, Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @param Image   $image
     * @return Response
     */
    public function edit(Product $product, Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @param Image   $image
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product, Image $image)
    {
        //
        return redirect()->route('admin.product.image.index', [$product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Image   $image
     * @return RedirectResponse
     */
    public function destroy(Product $product, Image $image)
    {
        $image->delete();

        return redirect()->route('admin.product.image.index', [$product]);
    }
}
