<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Auth::user()->blogs()->orderby('created_at', 'desc')->get();
        return view('home', compact('blogs'));
    }

    public function post(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('blog_title');
        $blog->contents = $request->input('blog_contents');
        $blog->users_id = 1;
        $blog->save();
        return redirect('/home');
    }

    public function client()
    {   
        $blog = Blog::find();
        return view('/client',compact('blogs'));
    }
  
}
