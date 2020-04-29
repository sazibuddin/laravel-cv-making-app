<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function admin() {
        return view('admin.index');
    }

    public function all_member() {
        $users = User::where('role', 'user')->orderBy('id','DESC')->paginate(5);
        
        return view('admin.member.index',compact('users'));
    }
}
