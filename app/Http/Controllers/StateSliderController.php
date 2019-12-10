<?php

namespace App\Http\Controllers;

use App\Staslider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class StateSliderController extends Controller
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
         $sliders=DB::table('stasliders')->where('state_id', Auth::guard('state')->id())->orderBy('id', 'desc')->get();
       return view('admin-state.view-slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-state.create-slider');
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
            'image'=> ['required','max:500', 'mimes:jpg,png,jpeg']
        ]);

          $validation['state_id']=Auth::guard('state')->id(); 
          

        if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('stategallery'), $name);
        $validation['image']= $name;
        };
       
       $record=DB::table('stasliders')->count();

        if($record ==5 ){
            return back()->with('customerror', 'Only 5 image sliders are allowed. Delete a slider record and add another');
        }
        
        Staslider::create($validation);
        return back()->with('success', 'Slider image successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staslider  $staslider
     * @return \Illuminate\Http\Response
     */
    public function show(Staslider $staslider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staslider  $staslider
     * @return \Illuminate\Http\Response
     */
    public function edit(Staslider $staslider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staslider  $staslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staslider $staslider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staslider  $staslider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staslider $staslider)
    {
         if ($staslider->id) {
    

        $usersImage = public_path("stategallery/{$staslider->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $staslider->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();

    }
    }
}
