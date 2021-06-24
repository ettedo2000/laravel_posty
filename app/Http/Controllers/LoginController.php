<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        //remember me argument added $request->remember

        if (!Auth::attempt($request->only('email','password'),$request->remember)) {
            return back()->with('status','Invalid login details');
        }

        return redirect()->route('dashboard');
    }
}
