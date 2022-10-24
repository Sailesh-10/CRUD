<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admins.login');
    }
    public function home()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        $posts = Post::all();
        return view('admins.showpost', ['user' => $user], compact('posts'));
    }
    public function StatusEdit($id)
    {
        $post = Post::find($id);
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('admins.status', compact('post'), ['user' => $user]);
    }



    public function StatusUpdate(Request $request, $id)
    {


        $userId = Session::get('user_id');
        $user = User::find($userId);

        $post =  Post::find($id);
        $post->status = $request->input('status');
        $post->save();

        return redirect()->route('admin.dash')->with('success', 'Status updated succesfully.');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin.dash')->with('success', 'Post deleted successfully');
    }
    public function ShowUsers()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        $users = User::where('user_type', 'user')->get();
        return view('admins.showusers', ['user' => $user], compact('users'));
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.dash')->with('success', 'User deleted successfully');
    }
    public function addUser()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('admins.adduser', ['user' => $user]);
    }
    public function UserSave(Request $request)
    {

        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'repeat_password' => 'same:password',
            'gender' => 'required',
            'phone' => 'required|min:10|max:10',
            'address' => 'required',
            'dob' => 'required',
        ]);

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->gender = $request->input('gender');
        $user->dob = $request->input('dob');
        $user->address = $request->input('address');
        $image = $request->file('image');
        $imageName = date('YmdHi') . $image->getClientOriginalName();
        $image->move(public_path('template/img'), $imageName);
        $user->image = $imageName;
        $user->save();


        return redirect()->route('admin.users')->with('success', 'User Added successfully');
    }
   
   
    
    public function testimonial()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('admins.testimonial', ['user' => $user]);

    }
}