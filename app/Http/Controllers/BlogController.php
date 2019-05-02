<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->content = $request->input('blog_content');
        Auth::user()->blogs()->save($blog);

        return redirect()->route('home');
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {   
        $blog = Blog::find($id);
        return view('edit', compact('blog'));
    }

    public function update($id, Request $request)
    {
        $blog = Blog::find($id);
        $blog->content = $request->input('blog_content');
        Auth::user()->blogs()->save($blog);
        $blog = Blog::all();
        return redirect()->route('home');

    }


    


}

