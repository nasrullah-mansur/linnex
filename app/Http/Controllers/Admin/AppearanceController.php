<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Appearance;
use Illuminate\Http\Request;

class AppearanceController extends Controller
{
    public function index()
    {
        $app = Appearance::first();

        return view('admin.app.index', compact('app'));
    }

    public function update(Request $request)
    {
        $app = Appearance::first();

        if(!$app) {
            $request->validate([
                'logo' => 'required|mimes:png,jpg',
                'favicon' => 'required|mimes:png,jpg'
            ]);
            $app = new Appearance();
        }

        if($request->logo) {
            $app->logo = ImageUpload($request->logo, THEME_APPEARANCE, NULL);
        }
        if($request->favicon) {
            $app->favicon = ImageUpload($request->favicon, THEME_APPEARANCE, NULL);
        }

        $app->save();

        return redirect()->route('admin.appearance')->with('success', 'Appearance updated successfully');
    }
}
