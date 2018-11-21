<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::where('status', 1)->orderBy('created_at','desc')->get();
        return view('backEnd.slider.show', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'slider_title' => 'required|string',
            'slider_image' => 'required|image',
            'status' => 'required|Boolean'
        ]);

        if($request->hasFile('slider_image')){

            $path = $request->file('slider_image')->store('slider');
            
        }
        $slider = new Slider();
         $slider->slider_title = $request->slider_title;
         $slider->slider_image = $path;
         $slider->status = $request->status;
         $slider->save();

        Toastr::success('create Successfully!', 'Notification');
        return redirect(route('slider.manage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->status = $request->status;
        $slider->save();

        Toastr::success('Status Update Successfully!', 'Notification');
        return redirect(route('slider.manage'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backEnd.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'slider_title' => 'required|string',
            'status' => 'required|Boolean'
        ]);
        $slider = Slider::findOrFail($id);
        if($request->hasFile('slider_image'))
        {
            if (file_exists(storage_path("app/public/{$slider->slider_image}")))
            {
                unlink(storage_path("app/public/{$slider->slider_image}"));
            }
            $path = $request->file('slider_image')->store('slider');
            $slider->slider_title = $request->slider_title;
            $slider->slider_image = $path;
            $slider->status = $request->status;
            $slider->save();
            Toastr::success('Update Successfully!', 'Notification');
            return redirect(route('slider.manage'));          
        }
         $slider->slider_title = $request->slider_title;
         $slider->status = $request->status;
         $slider->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('slider.manage'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

            if (file_exists(storage_path("app/public/{$slider->slider_image}")))
            {
                unlink(storage_path("app/public/{$slider->slider_image}"));
            }
            Slider::findOrFail($id)->delete();
            Toastr::success('delete Successfully!', 'Notification');
            return redirect(route('slider.manage'));

    }
}
