<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Throwable;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $sliders = Slide::all();

        foreach ($sliders as $key => $value) {
            $value->path = Storage::url($value->link);
        }

        return view('admin.slide.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
                $fileName = time() . $key . '.' . ($file->extension());
                $filePath = $file->storeAs("public/slide", $fileName);
                Slide::create([
                    'link' => $filePath,
                    'filename' => $file->getClientOriginalName()
                ]);
            }
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     * @throws Exception
     */
    public function destroy(Slide $slide)
    {
        $link = $slide->link;

        try {
            $slide->delete();
            Storage::delete($link);
        } catch (Throwable $th) {
        }

        return back()->withStatus(__('Slide successfully deleted.'));
    }
}
