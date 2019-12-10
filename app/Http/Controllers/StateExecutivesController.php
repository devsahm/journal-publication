<?php

namespace App\Http\Controllers;

use App\Exestate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class StateExecutivesController extends Controller
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
           $executives=Exestate::where('state_id', Auth::guard('state')->id())->get();
           return view('admin-state.view-executive', compact('executives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-state.create-executive');
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
            'name'=>['min:5', 'required'],
            'position'=>['required'],
            'profile'=>['required', 'min:10']
        ]);

          $validation['state_id']=Auth::guard('state')->id(); 

          if (exestate::where([
    ['position', '=', Input::get('position')],
    ['state_id', '=', Auth::guard('state')->id()]
])->exists()) {
            session()->flash('customerror', $request->position. ' position already exist in our record');
        return back();
          }

          Exestate::create($validation);
          return back()->with('success', 'Executive position for '.$request->position.' was succesfully added');


         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exestate  $exestate
     * @return \Illuminate\Http\Response
     */
    public function show(Exestate $exestate)
    {
     return view('admin-state.display-executive', compact('exestate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exestate  $exestate
     * @return \Illuminate\Http\Response
     */
    public function edit(Exestate $exestate)
    {
         return view('admin-state.edit-executives', compact('exestate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exestate  $exestate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exestate $exestate)
    {
        $exestate->update(request()->validate([    
            'name'=>'required|min:6',
            'profile'=>'required|min:10'
        ]));

     session()->flash('success', 'Record successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exestate  $exestate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exestate $exestate)
    {
     $exestate->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();
    }
}
