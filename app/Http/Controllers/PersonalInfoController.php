<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInfo;
use Illuminate\Support\Facades\Auth;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = PersonalInfo::where('user_id' , Auth::user()->id)->first();
        return view('frontend.profile.personal-setup', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'fathers_name' => ['required'],
            'mothers_name' => ['required'],
            'nationality' => ['required'],
            'gender' => ['required'],
            'con_no' => ['required'],
            'email' => ['required'],
            'blood_group' => ['required'],
            'address' => ['required'],
            'image' => ['required'],
        ]);

        $data = new PersonalInfo();
        $data->user_id = $request->user_id;
        $data->name = $request->name;
        $data->fathers_name = $request->fathers_name;
        $data->mothers_name = $request->mothers_name;
        $data->nationality = $request->nationality;
        $data->nid = $request->nid;
        $data->gender = $request->gender;
        $data->con_no = $request->con_no;
        $data->email = $request->email;
        $data->blood_group = $request->blood_group;
        $data->address = $request->address;


         $image = $request->file('image');

       
            $image_name = time();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'media/person_image/';
            $image_url = $upload_path.$image_full_name;
            $succcess = $image->move($upload_path, $image_full_name);

            $data->image = $image_url;
            $res = $data->save();

            if($res){
             return redirect()->back()->with('success', 'Your personal information added successfully');
            }else{
             return redirect()->back()->with('failed', 'Faile to add Your personal information. please try again');
            }

            
      
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
