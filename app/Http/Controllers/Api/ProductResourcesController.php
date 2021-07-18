<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SaveResourceJob;
use App\Models\Product;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductResourcesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function store(Request $request, Product $product)
    {
        $this->dispatch(new SaveResourceJob($product, $request->file('file')));
        return response()->noContent();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param Product  $product
     * @param Resource $resource
     * @return Response
     */
    public function update(Request $request, Product $product, Resource $resource)
    {
        //
        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product  $product
     * @param Resource $resource
     * @return Response
     */
    public function destroy(Product $product, Resource $resource)
    {
        $resource->forceDelete();
        return response()->noContent();
    }
}
