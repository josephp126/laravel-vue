<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Exception;
use Illuminate\Http\Response;

class ImageController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param Image $image
     * @return Response
     * @throws Exception
     */
    public function destroy($image)
    {
        $found = Image::find($image);
        if ($found) {
            $found->delete();
        }
        return response()->noContent();
    }
}
