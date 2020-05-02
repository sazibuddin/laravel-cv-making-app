<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PersonalInfo;
use App\ExperienceInfo;
use App\EducationInfo;
class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    public function admin() {
        $users = User::where('role', 'user')->count();
        return view('admin.index',compact('users'));
    }

    
    public function showLogin()
    {
        return view('admin.login');
    }

    public function all_member() {
        $users = User::where('role', 'user')->orderBy('id','DESC')->paginate(5);
        
        return view('admin.member.index',compact('users'));
    }


    public function show($id) {

        $users = User::where('id', $id)->first();
        return view('admin.member.view',compact('users'));

    }

    public function editpersonalInfo($id) {
        $user = User::findOrFail($id);
        return view('admin.member.edit',compact('user'));
        
    }
 
    public function updatepersonalInfo(Request $request , $id) {
        $data = PersonalInfo::findOrFail($id);
        $old_image = $request->old_image;
        $validatedData = $request->validate([
            'fathers_name' => ['required'],
            'mothers_name' => ['required'],
            'nationality' => ['required'],
            'gender' => ['required'],
            'con_no' => ['required'],
            'blood_group' => ['required'],
            'address' => ['required'],
            'skill' => ['required'],
        ]);


        $data->fathers_name = $request->fathers_name;
        $data->mothers_name = $request->mothers_name;
        $data->nationality = $request->nationality;
        $data->nid = $request->nid;
        $data->gender = $request->gender;
        $data->con_no = $request->con_no;
        $data->blood_group = $request->blood_group;
        $data->address = $request->address;
        $data->skill = $request->skill;
        
        $image = $request->file('image');

        if($image) {
            unlink($old_image);
            $image_name = time();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'media/person_image/';
            $image_url = $upload_path.$image_full_name;
            $succcess = $image->move($upload_path, $image_full_name);

            $data->image = $image_url;
            $res = $data->save();
        }else{
            $res = $data->save();
        }
        if($res){
            $notification = array(
                'messege' => 'personal info update successfully',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Failed to update personal info',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }
        
    }
 


    // experience information 

    public function experienceInfo($id) {
        $user = User::findOrFail($id);
        return view('admin.member.experience_edit',compact('user'));
        
    }


    public function updateexperienceInfo(Request $request , $id) {
        $data = ExperienceInfo::findOrFail($id);
        $validatedData = $request->validate([
            'company_name' => ['required'],
            'designation' => ['required'],
            'department' => ['required'],
            'company_locoation' => ['required'],
            'working_from' => ['required'],
            'working_to' => ['required'],
        ]);
        
        $data->company_name = $request->company_name;
        $data->designation = $request->designation;
        $data->department = $request->department;
        $data->company_locoation = $request->company_locoation;
        $data->working_from = $request->working_from;
        $data->working_to = $request->working_to;

        
        if($data->save()){
            $notification = array(
                'messege' => 'Experience info update successfully',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Failed to update experience info',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }

    }


    public function editeducationalInfo($id) {
        $user = User::findOrFail($id);
        return view('admin.member.educational_edit',compact('user'));
        
    }


    public function updateeducationalnfo(Request $request , $id) {
        $data = EducationInfo::findOrFail($id);
        $validatedData = $request->validate([
            'education_level' => ['required'],
            'degree_title' => ['required'],
            'result' => ['required'],
            'passing_year' => ['required'],
            'board_name' => ['required'],
            'institute_name' => ['required'],
        ]);


        $data->education_level = $request->education_level;
        $data->degree_title = $request->degree_title;
        $data->result = $request->result;
        $data->passing_year = $request->passing_year;
        $data->board_name = $request->board_name;
        $data->institute_name = $request->institute_name;

        
        if($data->save()){
            $notification = array(
                'messege' => 'educationl info update successfully',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Failed to update educationl info',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }

    }

    


    public function deleteUser($id){

        $user = User::findOrFail($id);
        $person_info = PersonalInfo::where('user_id', $id )->first();
        $image = $person_info->image;
        unlink($image);
        $person_info->delete();
        $education_info = EducationInfo::where('user_id', $id )->delete();
        $experience_info = ExperienceInfo::where('user_id', $id )->delete();
       
        $res = $user->delete();
        if($res){
            $notification = array(
                'messege' => 'User deleted successfully',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Failed to delte user',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }
      


    }
}
