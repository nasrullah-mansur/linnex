<?php

namespace App\Http\Controllers;

use App\Models\Admin\CustomCode;
use Illuminate\Http\Request;

class CustomCodeController extends Controller
{
    public function index()
    {
        $code = CustomCode::first();

        return view('admin.custom_code.index', compact('code'));
    }

    public function update(Request $request)
    {
        $code = CustomCode::first();

        if(!$code) {
            $code = new CustomCode();
        }

        $code->css = $request->css;
        $code->js = $request->js;

        $code->save();

        return redirect()->route('admin.custom.code')->with('success', 'Custom code added successfully');
    }
}
