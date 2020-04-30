<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function profile_view($id){
        $users = User::where('id', $id)->first();
        return view('frontend.profile.profile', compact('users'));
    }
}
