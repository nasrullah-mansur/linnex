<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function profile(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('admin.password')->with('success', 'Profile changed successfully');
    }


    public function password(Request $request)
    {
        
        $request->validate([
            'password' => 'required',
            'con_password' => 'required|same:password'
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('admin.password')->with('success', 'Password changed successfully');
    }


}
