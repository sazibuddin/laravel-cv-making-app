<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile_view($id){
        return view('frontend.profile.profile');
    }
}
