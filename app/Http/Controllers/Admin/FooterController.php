<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();

        return view('admin.footer.index', compact('footer'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'contact' => 'required',
            'news' => 'required',
            'copyright' => 'required'
        ]);

        $footer = Footer::first();

        if(!$footer) {
            $footer = new Footer();
        }

        $footer->contact = $request->contact;
        $footer->news = $request->news;
        $footer->copyright = $request->copyright;

        $footer->save();

        return redirect()->route('admin.footer')->with('success', 'Footer updated successfully');

    }
}
