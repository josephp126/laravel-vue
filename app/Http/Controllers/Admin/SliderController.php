<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Jobs\SaveImageJob;
use App\Models\Slide;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $sliders = Slide::sorted()->get();

        return view('admin.slide.index', compact('sliders'));
    }

    /**
     * @param SlideRequest $request
     * @param Slide        $slider
     * @return RedirectResponse
     */
    public function update(SlideRequest $request, Slide $slider)
    {
        $slider->update($request->validated());

        return redirect()->route('admin.slider.index');
    }

    public function show()
    {
        return redirect()->route('admin.slider.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $files = $request->file('file');

        if ($files) {
            foreach ($files as $key => $file) {
                $slideProps = [
                    'link'     => sprintf("slide-%s", $key),
                    'filename' => $file->getClientOriginalName(),
                ];

                $slide = Slide::create($slideProps);

                $this->dispatch(new SaveImageJob($slide, $file));
            }
        }

        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Slide $slider
     * @return Response
     */
    public function destroy(Slide $slider)
    {
        $slider->delete();

        return redirect()->route('admin.slider.index')->withStatus(__('Slide successfully deleted.'));
    }
}
