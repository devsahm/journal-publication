<?php

namespace App\Http\Controllers;

use App\Mregister;
use Illuminate\Http\Request;

class MemberRegistrationController extends Controller
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
            
        $validation=request()->validate([
            'surname'=>'required|min:3',
            'firstname'=>'required|min:3',
            'othername'=>'required|min:2',
            'title'=> 'required',
            'job_title'=> 'required',
            'employer'=> 'required|min:8',
            'correspondence'=> 'required',
            'home_address'=> 'required',
            'telephone'=> 'required|numeric',
            'business_nature'=> 'required',
            'nationality'=> 'required',
            'state'=> 'required',
            'dob'=>'required',
            'psychology_field'=> 'required|min:5',
            'work_nature'=> 'required',
        ],

             [ 'dob.required' => 'The date of birth field is required',
             'employer.min' => 'Employer/institition or firm name field must have at least 8 characters',
             'psychology_field.required' => 'psychology field section is required',
             'business_nature.required'=>'The business nature field is required'
             
        ]);    
        $validation['email']=$request->email;
        $validation['member_id']=$request->id;

  Mregister::create($validation);
        session()->flash('success', 'General Information was submitted successfully');

        return redirect('/membership/academic-qualification');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mregister  $mregister
     * @return \Illuminate\Http\Response
     */
    public function show(Mregister $mregister)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mregister  $mregister
     * @return \Illuminate\Http\Response
     */
    public function edit(Mregister $mregister)
    {
       return view('africa.members-registration-edit', compact('mregister'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mregister  $mregister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mregister $mregister)
    {
         $mregister->update(request()->all());

     session()->flash('success', 'Blog news was successfully updated');
     return back();
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mregister  $mregister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mregister $mregister)
    {
        //
    }
}
