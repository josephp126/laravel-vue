<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Resource;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function index(Product $product)
    {
        return view('admin.product.resource.index', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product  $product
     * @param Resource $resource
     * @return Application|Factory|View
     */
    public function show(Product $product, Resource $resource)
    {
        return view('admin.product.resource.show', compact('product', 'resource'));
    }
}
