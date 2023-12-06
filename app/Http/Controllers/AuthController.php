<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request) {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if (Auth::attempt($request->only(['email', 'password']))) {
                return redirect()->route('profile');
            }
        } catch (err) {
            dd("Error");
        }
    }

    function register(Request $request) {
        $request->validate([
            'password' => 'confirmed|required',
            'email' => 'email|required',
            'name' => 'required'
        ]);

        $user = new User($request->all());
        $user->password = Hash::make($request->get('password'));
        $user->save();
        if ($user) {
            return route("profile");
        }
        
        return view("pages.register", compact(["msg" => "Error please try again"]));
    }
}
