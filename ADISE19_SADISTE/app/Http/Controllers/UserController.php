<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('profile', ['username' => User::findOrFail($user)]);
    }


}
