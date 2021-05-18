<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = ProductCategory::where('parent_id', $request->get('parent_id'))->orderBy('sort')->get();

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $category = ProductCategory::where('parent_id', $request->get('parent_id'))->orderBy('sort', 'desc')->first();

        ProductCategory::create(
            [
                'parent_id' => $request->get('parent_id'),
                'name'      => $request->get('name'),
                'order'     => (optional($category)->sort || 1) + 1,
            ]
        );

        return response()->json(['status' => true]);
    }

    public function saveSort(Request $request)
    {
        $ids = $request->get('ids');

        foreach ($ids as $sort => $id) {
            ProductCategory::find($id)->update(compact('sort'));
        }

        return response()->json(['status' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param ProductCategory $productCategory
     * @return Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request         $request
     * @param ProductCategory $productCategory
     * @return Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductCategory $productCategory
     * @return Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return response()->json(['status' => true]);
    }
}
