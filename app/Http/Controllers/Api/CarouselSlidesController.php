<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SaveImageJob;
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
        $carousel->load('slides.images');

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
        $carousel->slides()->create();

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     *
     * @param Carousel      $carousel
     * @param CarouselSlide $slide
     * @return Response
     */
    public function show(Carousel $carousel, CarouselSlide $slide)
    {
        return $slide;
    }

    /**
     * Display the specified resource.
     *
     * @param Carousel      $carousel
     * @param CarouselSlide $slide
     * @return Response
     */
    public function images(Carousel $carousel, CarouselSlide $slide)
    {
        return $slide->images;
    }

    public function pushImage(Carousel $carousel, CarouselSlide $slide, Request $request)
    {
        $this->dispatch(new SaveImageJob($slide, $request->file('file')));

        return response()->noContent();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request       $request
     * @param Carousel      $carousel
     * @param CarouselSlide $slide
     * @return CarouselSlide
     */
    public function update(Request $request, Carousel $carousel, CarouselSlide $slide)
    {
        $slide->update($request->all());

        return $slide;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Carousel      $carousel
     * @param CarouselSlide $slide
     * @return Response
     */
    public function destroy(Carousel $carousel, CarouselSlide $slide)
    {
        $slide->delete();

        return response()->noContent();
    }
}
