<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register', ["siteTitle" => "Register"]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email:dns|max:255|unique:users|',
            'password' => 'required|min:6',
        ]);

        User::create([
            'fullname' => $validated['fullname'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // $request->session()->flash('success', 'Registration successfull. You can login now.');
        return redirect('login')->with('success', 'Registration successfull. You can login now.');
    }
}
