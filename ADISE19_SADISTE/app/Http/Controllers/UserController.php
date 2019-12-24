<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function update_profile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'image' => 'required|string',
        ]);
        $user = Auth::user();

        $user->name =  $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->image = $request->input('image');

        $user->save();

        return redirect( route('profile.index',['username' => Auth::user()->username]) );
    }
}
