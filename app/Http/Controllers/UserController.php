    
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;
use App\Http\Requests\EditProfile;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function users()
    {
        $auth_id = Auth::user()->id;
        $users = User::where('id', '!=', $auth_id)->get();
        // dd(auth()->user()->following()->find());
        return view('users', compact('users'));
    }
    public function user_home($id)
    {
        $user = User::find($id);
        $blogs = $user->blogs()->get();
        return view('user_home', compact('user', 'blogs'));
    }
    public function user_edit($id)
    {
        $user = User::find($id);
        return view('user_edit', compact('user'));
    }
    public function user_update(EditProfile $request, $id)
    {
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password =  Hash::make($request->input('password'));
        $user->save();
        return redirect('/home');
    }
    public function follow($id)
    {
        $user = User::find($id);
        Auth::user()->following()->save($user);
        return redirect('/users');
    }
    public function unfollow($id)
    {
        auth()->user()->following()->detach($id);
        return redirect('/users');
    }
}