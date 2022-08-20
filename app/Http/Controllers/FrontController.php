<?php

namespace App\Http\Controllers;

use App\Models\Admin\Social;
use App\Models\Admin\TopBar;
use Illuminate\Http\Request;
use App\Models\Admin\MainMenu;
use App\Models\Admin\Appearance;
use App\Models\Admin\CustomCode;
use App\Models\Admin\Facebook;
use App\Models\Admin\Facility;
use App\Models\Admin\Footer;
use App\Models\Admin\Phone;
use App\Models\Admin\Slider;
use App\Models\Admin\Theme;

class FrontController extends Controller
{
    public function index()
    {
        $top = TopBar::first();
        $app = Appearance::first();
        $menus = MainMenu::first();
        $socials = Social::first();
        $sliders = Slider::latest()->get();
        $phones = Phone::all();
        $fb = Facebook::first();
        $facilities = Facility::all();
        $footer = Footer::first();
        $theme = Theme::first();
        $custom = CustomCode::first();
        return view('welcome', compact('theme', 'custom', 'top', 'app', 'menus', 'socials', 'sliders', 'phones', 'fb', 'facilities', 'footer'));
    }
}
