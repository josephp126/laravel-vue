<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Contracts\Container\BindingResolutionException;

class ResourceController extends Controller
{
    /**
     * Display the specified resource/ file.
     *
     * @param Resource $resource
     * @throws BindingResolutionException
     */
    public function show(Resource $resource, $name)
    {
        abort_if(!$resource->fileExists, 404, 'resource "' . $name . '" not found');

        return response()
            ->make($resource->file)
            ->header('Content-Type', $resource->mime_type ?? 'application/pdf')
            ->setCache(['no_cache' => true]);
    }
}
