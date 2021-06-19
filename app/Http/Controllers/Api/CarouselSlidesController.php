<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\CarouselSlide;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarouselSlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Carousel $carousel
     * @return Carousel
     */
    public function index(Carousel $carousel)
    {
        $carousel->load('slides');

        return $carousel;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request  $request
     * @param Carousel $carousel
     * @return Response
     */
    public function store(Request $request, Carousel $carousel)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Carousel      $carousel
     * @param CarouselSlide $carouselSlide
     * @return Response
     */
    public function show(Carousel $carousel, CarouselSlide $carouselSlide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request       $request
     * @param Carousel      $carousel
     * @param CarouselSlide $carouselSlide
     * @return Response
     */
    public function update(Request $request, Carousel $carousel, CarouselSlide $carouselSlide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Carousel      $carousel
     * @param CarouselSlide $carouselSlide
     * @return Response
     */
    public function destroy(Carousel $carousel, CarouselSlide $carouselSlide)
    {
        //
    }
}
