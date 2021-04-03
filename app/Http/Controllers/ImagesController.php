<?php

namespace App\Http\Controllers;

use App\Models\Image;

class ImagesController extends Controller
{

    public function show(Image $image, $name)
    {
        abort_if(!$image->fileExists, 404, 'file "' . $name . '" not found');

        return response()
            ->make($image->file)
            ->header('Content-Type', $image->mime_type ?? 'png')
            ->setCache(['no_cache' => true]);
    }
}
