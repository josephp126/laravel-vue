<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SaveImageJob;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class ProductImagesController extends Controller
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
        $last_image = $product->images()->orderBy('sort', 'desc')->first();
        $sort       = ($last_image->sort ?? 0) + 1;
        $this->dispatch(new SaveImageJob($product, $request->file('file'), true, compact('sort')));

         $last_id = DB::table('images')->max('id');
        $q = "insert into product_images (image_id, product_id) values ('".$last_id."', '".$product->id."')";
        DB::insert($q);
        return response()->noContent();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @param Image   $image
     * @return Response
     */
    public function update(Request $request, Product $product, Image $image)
    {
        $image->file = $request->file('file');
        return response()->noContent();
    }

    public function saveSort(Request $request)
    {
        $ids = $request->get('ids');

        foreach ($ids as $sort => $id) {
            Image::find($id)->update(compact('sort'));
        }

        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Image   $image
     * @return Response
     */
    public function destroy(Product $product, Image $image)
    {
        $image->delete();
        return response()->noContent();
    }
}
