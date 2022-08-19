<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Facebook;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function index()
    {
        $fb = Facebook::first();
        
        return view('admin.facebook.index', compact('fb'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'video' => 'required',
            'page' => 'required'
        ]);

        $fb = Facebook::first();

        if(!$fb) {
            $fb = new Facebook();
        }

        $fb->video = $request->video;
        $fb->page = $request->page;

        $fb->save();

        return redirect()->route('facebook.index')->with('success', "Facebook info updated successfully");
    }
}
