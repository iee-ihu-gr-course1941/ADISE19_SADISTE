<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('profile', ['username' => User::findOrFail($user)]);
    }

    public function edit(User $user)
    {
        return view('edit_profile', ['username' => User::findOrFail($user)]);
    }

    public function reset_password(User $user)
    {
        return view('reset_password', ['username' => User::findOrFail($user)]);
    }

    public function delete_profile(User $user)
    {
        return view('delete_profile', ['username' => User::findOrFail($user)]);
    }

    public function update_profile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'image' => 'required|string',
        ]);

        $user = Auth::user();

        // $user->name =  $request->input('name');
        // $user->email = $request->input('email');
        // $user->username = $request->input('username');
        $user->image = $request->input('image');

        $user->fill($data)->save();

        return redirect( route('profile.index',['username' => Auth::user()->username]) );
    }

    public function update_password(Request $request)
    {
        // $data = $request->validate([
        //     'required', 'string', 'min:8', 'confirmed',
        // ]);

        $curr_password = $request->old_password;
        $new_password  = $request->password;

        if(!Hash::check($curr_password,Auth::user()->password)){
            return view('reset_password', ['username' => User::findOrFail(Auth::user())]);
        }
        else
        {
            $request->user()->fill(['password' => Hash::make($new_password)])->save();
            return redirect( route('profile.index',['username' => Auth::user()->username]) );
        }
    }

    public function delete_account()
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return redirect( route('home') );
    }
}
