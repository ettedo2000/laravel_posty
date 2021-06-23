<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //die_dump function
        //419 error means form cross site request missing @csrf in form token validation
        $this->validate($request,[
            'name'=> 'required|max:225',
            'username'=> 'required|max:225',
            'email'=> 'required|email|max:225',
            'password'=> 'required|confirmed',
        ]);

        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);



        //dd('stop');

    }
}
