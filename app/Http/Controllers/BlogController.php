<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class BlogController extends Controller
{
    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/home');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $blog = Blog::find($id);
        $blog->title = $request->input('blog_title');
        $blog->content = $request->input('blog_content');
        $blog->save();
        return redirect('/home');
    }
}

