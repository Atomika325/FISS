<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfessorProfile;

class ProfessorProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'fac_pic',
            'faculty_id' => 'required',
            'last_name' =>'required',
            'first_name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'preferred_subj' => 'required',
            'deg_grad' => 'required',
            'master_deg',
            'doctor_deg' ,
            'faculty_type' => 'required',
        ]);

        //Create Post
        $professorprofile = new ProfessorProfile;
        $professorprofile->fac_pic = $request->input('fac_pic');
        $professorprofile->faculty_id = $request->input('faculty_id');
        $professorprofile->last_name = $request->input('last_name');
        $professorprofile->first_name = $request->input('first_name');
        $professorprofile->email = $request->input('email');
        $professorprofile->contact_no = $request->input('contact_no');
        $professorprofile->preferred_subj = $request->input('preferred_subj');
        $professorprofile->deg_grad = $request->input('deg_grad');
        $professorprofile->master_deg = $request->input('master_deg');
        $professorprofile->doctor_deg = $request->input('doctor_deg');
        $professorprofile->faculty_type = $request->input('faculty_type');
        $professorprofile->save();

        return redirect('/admin/add')->with('success', 'Profile Created!');

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
