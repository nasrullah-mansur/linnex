<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::latest()->get();
        return view('admin.phone.index', compact('phones'));
    }

    public function create()
    {
        return view('admin.phone.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg'
        ]);

        $phone = new Phone();
        $phone->image = ImageUpload($request->image, PHONE_IMAGE, NULL) ;

        $phone->save();

        return redirect()->route('admin.phone.index')->with('success', 'Phone item added successfully');
    }

    public function edit($id)
    {
        $phone = Phone::where('id', $id)->firstOrFail();

        return view('admin.phone.edit', compact('phone'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg'
        ]);

        $phone = Phone::where('id', $id)->firstOrFail();
        removeImage($phone->image);
        $phone->image = ImageUpload($request->image, PHONE_IMAGE, NULL) ;

        $phone->save();

        return redirect()->route('admin.phone.index')->with('success', 'Phone item updated successfully');
    }

    public function delete($id)
    {
        $phone = Phone::where('id', $id)->firstOrFail();

        removeImage($phone->image);
        $phone->delete();

        return redirect()->route('admin.phone.index')->with('success', 'Phone item removed successfully');
    }
}
