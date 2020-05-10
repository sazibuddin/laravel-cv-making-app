<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::where('role_id', 1)->orderBy('id','DESC')->paginate(5);
        
        return view('admin.admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $user = User::findOrFail($id);

        return view('admin.admin.profile', compact('user'));
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function passUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $password = $request->password;
        $c_passsord = $request->c_passsord;

        if($password == $c_passsord){
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();  
            $notification=array(
              'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
              'alert-type'=>'success'
               );
               return Redirect()->to('admin/login')->with('success', "Password reset successfull.");
        }else{
            $notification = array(
                'messege' => 'Password not match',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }
     
    }

  public function makeadmin(Request $request , $id) {
    
    $user = User::findOrFail($id);

    $user->role_id = 1;

    if($user->save()){
        $notification = array(
            'messege' => 'user status update successfully',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }else{
        $notification = array(
            'messege' => 'Failed to update status',
            'alert-type' => 'error',
        );
        return Redirect()->back()->with($notification);
    }

  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $res = $user->delete();

        if($res){
            $notification = array(
                'messege' => 'Admin delete successfully',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Failed to delte admin',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }
    }
}
