<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\MainMenu;
use App\Http\Controllers\Controller;

class MainMenuController extends Controller
{
    public function index()
    {
        $menu = MainMenu::first();

        return view('admin.header.main_menu', compact('menu'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'items' => 'required',
            'links' => 'required',
        ]);

        $menu = MainMenu::first();

        if(!$menu) {
            $menu = new MainMenu();
        }

        $menu->items = implode(",", $request->items);
        $menu->links = implode(",", $request->links);

        $menu->save();

        return redirect()->route('admin.mainMenu')->with('success', 'successs msg');
    }
}
