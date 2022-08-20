<?php

namespace App\Http\Controllers;

use App\Models\Admin\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $theme = Theme::first();
        return view('admin.theme.index', compact('theme'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $theme = Theme::first();

        if(!$theme) {
            $theme = new Theme();
        }

        $theme->title = $request->title;
        $theme->meta = $request->meta;

        $theme->save();

        return redirect()->route('admin.theme')->with('success', 'Theme info updated successfully');
    }
}
