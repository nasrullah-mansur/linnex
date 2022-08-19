<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\TopBar;
use Illuminate\Http\Request;

class TopBarController extends Controller
{
    public function index()
    {
        $top = TopBar::first();
        return view('admin.header.top', compact('top'));
    }

    public function update(Request $request)
    {
        $top = TopBar::first();

        if(!$top) {
            $top = new TopBar();
        }

        $top->email = $request->email;
        $top->service = $request->service;
        $top->service_link = $request->service_link;
        $top->phone = $request->phone;
        $top->contact = $request->contact;
        $top->contact_link = $request->contact_link;

        $top->save();

        return redirect()->route('admin.top.index')->with('success', 'Top bar updated successfully');
    }
}
