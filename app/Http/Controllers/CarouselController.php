<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function carouselStyles(Carousel $carousel)
    {
        $carousel->load('slides');
//        dd($carousel->toArray());
        \Debugbar::disable();

        $css = \View::make('styles.carousel', compact('carousel'));

        return response()->make($css)->header('Content-Type', 'text/css');
    }
}
