<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class TrainingController extends Controller
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
            'organisers'=>'required|min:3',
            'certificate'=>'required|min:2',
            'year'=>'required|numeric',
            'attachment'=> 'max:1000|mimes:png,jpg,jpeg,pdf'
        ],

             [ 'attachment.max' => 'File upload must not be more than 1mb',
             'attachment.mimes'=>'Only jpg, png and pdf image formats are allowed'
        
        ]);
        


        if(request()->hasFile('attachment')){

        $file = Input::file('attachment');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('trainingdoc'), $name);
        $validation['attachment']= $name;
        };
        $validation['member_id']=auth()->user()->id;
        Training::create($validation);
        session()->flash('success', 'qualification details has been added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        if ($training->id) {
    

        $usersImage = public_path("trainingdoc/{$training->attachment}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $training->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();
    

    }
    }
}
