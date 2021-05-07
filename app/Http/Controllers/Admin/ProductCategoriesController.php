<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return View
     */
    public function index(Request  $request)
    {
        return view('admin.productCategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.productCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $productCategory = ProductCategory::create($request->validate([
            // TODO :: validation here
        ]));

        session()->flash('ProductCategory.created');
        return redirect()->route('ProductCategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  ProductCategory  $productCategory
     * @return View
     */
    public function show(ProductCategory $productCategory)
    {
        return view('admin.productCategory.show', compact('productCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProductCategory  $productCategory
     * @return View
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('admin.productCategory.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  ProductCategory  $productCategory
     * @return RedirectResponse
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $productCategory->update($request->validate([
            // TODO :: validation here
        ]));

        session()->flash('ProductCategory.updated');
        return redirect()->route('productCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ProductCategory  $productCategory
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();

        session()->flash('ProductCategory.deleted');
        return redirect()->route('ProductCategory.index');
    }
}
