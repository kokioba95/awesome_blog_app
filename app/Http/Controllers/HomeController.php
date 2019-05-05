<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
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
        $blogs = Auth::user()->blogs()->orderBy('created_at', 'INC')->get();
        return view('home', compact('blogs'));
    }
    public function post(Request $request)
    {
        // Auth::user()->blogs()->create()
        $blog = new Blog;
        $blog->title = $request->input('blog_title');
        $blog->content = $request->input('blog_contents');
        Auth::user()->blogs()->save($blog);
        //Auth::user() means LoginUser
        return redirect('/home');
    }
}
