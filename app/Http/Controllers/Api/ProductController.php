<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductResource;
use App\Models\Product;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return ProductResource
     */
    public function show(Product $product)
    {
        $product_id = $product->getAttributes()["id"];
        $product->resources = \App\Models\ProductResource::all()->where('product_id',$product_id);
        return new ProductResource($product);
    }
    public function postResources(Request $request)
    {
        if($request->hasFile("file"))
        {
            $resource = new Resource();
            $product_resource = new \App\Models\ProductResource();

            //load files
            $file = $request->file("file");
            $name = "FILE_".time().".".$file->guessExtension();
            $ruta = public_path("resourses/".$name);
            copy($file,$ruta);

            $resource->user_id = 1;
            $resource->title = $request->post("name");
            $resource->filename = "resourses/".$name;
            $resource->is_active = $request->post("is_active") == true;
            $resource->resource_type_id = 5;
            $resource->resourceable_id = $request->post("product_id");
            $resource->save();
            $resource_id = DB::getPdo()->lastInsertId();

            $product_resource->product_id = $request->post("product_id");
            $product_resource->resource_id = $resource_id;
            $product_resource->save();

            return true;

        }
        else
        {
            dd("ERROR");
        }
    }
    public function putResources(Request $request)
    {
        $resource = new Resource();

        if($request->hasFile("file"))
        {
            $olds = DB::table('resources')->where('id',$request->resource_id)->get();
            foreach ($olds as $old) {
                unlink($old->filename);
            }
            //load files
            $file = $request->file("file");
            $name = "FILE_".time().".".$file->guessExtension();
            $ruta = public_path("resourses/".$name);
            copy($file,$ruta);
            $resource::where('id',$request->resource_id)->update(['filename'=>"resourses/".$name]);
        }
        $resource::where('id',$request->post('resource_id'))->update(['title'=>$request->post('name'),'is_active'=>$request->post('is_active') == 'on']);
        return true;

    }

    public function deleteResources(Request $request)
    {
        $olds = DB::table('resources')->where('id',$request->get("id"))->get();
        foreach ($olds as $old) {
            unlink($old->filename);
        }
        DB::table('resources')->where('id',$request->get("id"))->delete();
        DB::table('product_resources')->where('resource_id',$request->get("id"))->delete();
        return $request->get("resource_id");
//        return $request->getAttributes()["id"];
        //return DB::table('resources')->where('id',$request->resource_id)->delete();
    }

}
