<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->get();
        return view('admin.facility.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.facility.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg'
        ]);

        $facility = new Facility();
        $facility->image = ImageUpload($request->image, FACILITY_IMAGE, NULL) ;

        $facility->save();

        return redirect()->route('facility.index')->with('success', 'Facility item added successfully');
    }

    public function edit($id)
    {
        $facility = Facility::where('id', $id)->firstOrFail();

        return view('admin.facility.edit', compact('facility'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg'
        ]);

        $facility = Facility::where('id', $id)->firstOrFail();
        removeImage($facility->image);
        $facility->image = ImageUpload($request->image, FACILITY_IMAGE, NULL) ;

        $facility->save();

        return redirect()->route('facility.index')->with('success', 'Facility item updated successfully');
    }

    public function delete($id)
    {
        $facility = Facility::where('id', $id)->firstOrFail();

        removeImage($facility->image);
        $facility->delete();

        return redirect()->route('facility.index')->with('success', 'Facility item removed successfully');
    }
}
