<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationInfo;
class EducationInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.profile.education');
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
            'education_level' => ['required'],
            'degree_title' => ['required'],
            'result' => ['required'],
            'passing_year' => ['required'],
            'board_name' => ['required'],
            'institute_name' => ['required'],
        ]);

        $data = new EducationInfo();

        $data->user_id = $request->user_id;
        $data->education_level = $request->education_level;
        $data->degree_title = $request->degree_title;
        $data->result = $request->result;
        $data->passing_year = $request->passing_year;
        $data->board_name = $request->board_name;
        $data->institute_name = $request->institute_name;

        $res = $data->save();

        if($res){
         return redirect()->back()->with('success', 'Your education information added successfully');
        }else{
         return redirect()->back()->with('failed', 'Faile to add Your education information. please try again');
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
