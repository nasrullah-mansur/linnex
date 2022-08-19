<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function index()
    {
        $social = Social::first();
        return view('admin.header.social', compact('social'));
    }

    public function update(Request $request)
    {
        $social = Social::first();

        if(!$social) {
            $social = new Social();
        }

        $social->class_name = implode(',', $request->class_name);
        $social->icon_name = implode(',', $request->icon_name);
        $social->links = implode(',', $request->links);

        $social->save();

        return redirect()->route('admin.social')->with('success', "Social media added successfully");
    }
}
