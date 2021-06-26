<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth']);
    }

    public function index()
    {
        return view('posts.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'body' => 'required'
        ]);

        //Authorized user can post and create
        auth()->user()->posts()->create();
    }
}
