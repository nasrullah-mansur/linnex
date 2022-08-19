<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg'
        ]);

        $slider = new Slider();
        $slider->image = ImageUpload($request->image, SLIDER_IMAGE, NULL) ;

        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider item added successfully');
    }

    public function edit($id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();

        return view('admin.slider.edit', compact('slider'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg'
        ]);

        $slider = Slider::where('id', $id)->firstOrFail();
        removeImage($slider->image);
        $slider->image = ImageUpload($request->image, SLIDER_IMAGE, NULL) ;

        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider item updated successfully');
    }

    public function delete($id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();

        removeImage($slider->image);
        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Slider item removed successfully');
    }
}
