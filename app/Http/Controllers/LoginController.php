<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:320',
            'password' => 'required|min:6'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('error', 'Invalid login details');
        }

        return redirect()->route('posts.index')->with('success', 'Welcome back!');
    }
}
