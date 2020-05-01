<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExperienceInfo;
use Illuminate\Support\Facades\Auth;

class ExperienceInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencs = ExperienceInfo::where('user_id', Auth::user()->id )->get();
        return view('frontend.profile.experience' , compact('experiencs'));
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
            'company_name' => ['required'],
            'designation' => ['required'],
            'department' => ['required'],
            'company_locoation' => ['required'],
            'working_from' => ['required'],
            'working_to' => ['required'],
        ]);

        $data = new ExperienceInfo();
        $data->user_id = $request->user_id;
        $data->company_name = $request->company_name;
        $data->designation = $request->designation;
        $data->department = $request->department;
        $data->company_locoation = $request->company_locoation;
        $data->working_from = $request->working_from;
        $data->working_to = $request->working_to;

        $res = $data->save();

       if($res){
        return redirect()->back()->with('success', 'Your personal information added successfully');
       }else{
        return redirect()->back()->with('failed', 'Faile to add Your personal information. please try again');
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
        $item = ExperienceInfo::findOrFail($id);
        return view('frontend.edit.experience', compact('item'));
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

        $res = $data->save();

       if($res){
        return redirect()->back()->with('success', 'Your personal information added successfully');
       }else{
        return redirect()->back()->with('failed', 'Faile to add Your personal information. please try again');
       }
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
