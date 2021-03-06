<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Repository\ElequentBase;

class PostController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth']);
    }

   /* public function index()
    {
        dd('????');
        //$posts = Post::get(); //eloquent get all
        //will paginate output what value of argument reflects

        $posts = Post::paginate('20');

        dd($posts);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }*/

    public function getFilterSearch(Request $request)
    {
      if($request->id){echo 'yes';
          $posts = ElequentBase::findBy($request->id);
      } else{
          echo 'nope';
          $posts = Post::paginate('20');
      }

        //dd($request);
        return view('posts.index', [
            'posts' => $posts
        ]);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'body' => 'required'
        ]);

        //Authorized user can post and create
        //auth()->user()->posts()->create();
        $request->user()->posts()->create([
            //automatically will fill in user_id
            'body' => $request->body
        ]);

        return back();
    }
}
