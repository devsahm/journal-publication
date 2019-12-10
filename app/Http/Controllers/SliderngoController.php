<?php

namespace App\Http\Controllers;

use App\Sliderngo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class SliderngoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    { 
    $this->middleware("auth:ngo");
    }



    public function index()
    {
     $sliders=DB::table('sliderngos')->where('ngo_id', Auth::guard('ngo')->id())->orderBy('id', 'desc')->get();
     return view('ngo-admin.view-slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('ngo-admin.create-slider');
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
            'image'=> ['required','max:300', 'mimes:jpg,png,jpeg']
        ]);

          $validation['ngo_id']=Auth::guard('ngo')->id(); 
          

        if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['image']= $name;
        };
       
       $record=DB::table('sliderngos')->where('ngo_id', '=', Auth::guard('ngo')->id() )->count();

        if($record ==5 ){
            return back()->with('customerror', 'Only 5 image sliders are allowed. Delete a slider record and add another');
        }
        
        Sliderngo::create($validation);
        return back()->with('success', 'Slider image successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sliderngo  $sliderngo
     * @return \Illuminate\Http\Response
     */
    public function show(Sliderngo $sliderngo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sliderngo  $sliderngo
     * @return \Illuminate\Http\Response
     */
    public function edit(Sliderngo $sliderngo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sliderngo  $sliderngo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sliderngo $sliderngo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sliderngo  $sliderngo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sliderngo $sliderngo)
    {
        if ($sliderngo->id) {
    

        $usersImage = public_path("ngogallery/{$sliderngo->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $sliderngo->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();

    }
    }
}
