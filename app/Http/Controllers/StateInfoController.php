<?php

namespace App\Http\Controllers;

use App\Stateinfo;
use Illuminate\Http\Request;
use Auth;
use DB;
class StateInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



      public function __construct()
    {
     
    $this->middleware("auth:state");
    }



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
         $stateinfos=DB::table('stateinfos')->where('state_id', Auth::guard('state')->id())->get();
         return view('admin-state.create-stateinfo', compact('stateinfos'));
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
            'location'=>['min:5', 'required'],
            'email'=>['required', 'email'],
            'phone_number'=>['required', 'min:10', 'numeric']
        ]);

        $validation['state_id']=Auth::guard('state')->id();
        Stateinfo::create($validation);
        return back()->with('success', 'Record was added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stateinfo  $stateinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Stateinfo $stateinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stateinfo  $stateinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Stateinfo $stateinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stateinfo  $stateinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stateinfo $stateinfo)
    {
       $validation=request()->validate([    
      
            'location'=>'required|min:3',
            'email'=>'required',
            'phone_number'=>'required|min:10|numeric'
        ]);
       $stateinfo->update($validation);
       return back()->with('success', 'record was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stateinfo  $stateinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stateinfo $stateinfo)
    {
        //
    }
}
