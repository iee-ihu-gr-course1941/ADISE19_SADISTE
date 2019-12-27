<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;

class UserController extends Controller
{
    use UploadTrait;

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
//        $request->validate([
//            'name' => 'string|max:255',
//            'email' => 'string|email|max:255|unique:users',
//            'username' => 'string|max:255|unique:users',
//            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//        ]);

        $user = Auth::user();

        if ($request->input('name') != null)
        {
            $request->validate([
                'name' => 'string|max:255',
            ]);
            $user->name = $request->input('name');
        }
        if ($request->input('email') != null)
        {
            $request->validate([
                'email' => 'string|email|max:255|unique:users',
            ]);
            $user->email = $request->input('email');
        }
        if ($request->input('username') != null)
        {
            $request->validate([
                'username' => 'string|max:255|unique:users',
            ]);
            $user->username = $request->input('username');
        }
        if ($request->input('image') != null)
        {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $user->image = $request->input('image');
        }

        if ($request->has('image'))
        {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')) . '_' . time();
            // Define folder path
            $folder = '/storage/profiles/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->image = $filePath;
        }

        $user->save();

        return redirect( route('profile.index',['username' => Auth::user()->username]) );
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);

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
