<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:100',
            'username' => 'required|unique:users|min:2|max:36',
            'email' => 'required|email|unique:users|max:320',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::slug($request->username),
            'email' => Str::lower($request->email),
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route("posts.index", ['user' => auth()->user()->username])->with('success', 'Your account has been created.');
    }
}
