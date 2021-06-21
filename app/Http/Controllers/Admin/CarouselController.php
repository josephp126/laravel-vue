<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $data = Carousel::paginate($request->get('perPage', 50));

        return view('admin.carousel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarouselRequest $request
     * @return RedirectResponse
     */
    public function store(CarouselRequest $request)
    {
        Carousel::create($request->validated());

        session()->flash('admin.carousel.created');
        return redirect()->route('admin.carousel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Carousel $carousel
     * @return View
     */
    public function show(Carousel $carousel)
    {
        return view('admin.carousel.show', compact('carousel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Carousel $carousel
     * @return View
     */
    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarouselRequest $request
     * @param Carousel        $carousel
     * @return RedirectResponse
     */
    public function update(CarouselRequest $request, Carousel $carousel)
    {
        $carousel->update($request->validated());

        session()->flash('admin.carousel.updated');
        return redirect()->route('admin.carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Carousel $carousel
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();

        session()->flash('admin.carousel.deleted');
        return redirect()->route('admin.carousel.index');
    }
}
