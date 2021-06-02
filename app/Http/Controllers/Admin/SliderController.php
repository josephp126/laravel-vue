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
        if($request->type){
            $model = new Slide;
            $data = $model->orderby('sort')->get();
            $old_order = 0;
            $new_order = 0;
            $slider_id = 0;
            foreach ($data as $key => $value) {
                if($value->id == $slider->id){
                    $old_order = $value->sort;
                    if($request->type == "left"){
                        $slider_id = $data[$key-1]->id;
                        $new_order = $data[$key-1]->sort;
                    }else{
                        $slider_id = $data[$key+1]->id;
                        $new_order = $data[$key+1]->sort;
                    }
                    break;
                }
            }
            $model->where("id", $slider->id)->update(['sort'=>$new_order]);
            $model->where("id", $slider_id)->update(['sort'=>$old_order]);
        }
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
                $sort = Slide::max('sort') ?? -1 + 1;
                $slideProps = [
                    'link'     => sprintf("slide-%s", $key),
                    'filename' => $file->getClientOriginalName(),
                    'sort' => $sort
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
