<?php

namespace App\Http\Controllers;

use App\Aboutngo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class AboutngoController extends Controller
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
     $abouts=DB::table('aboutngos')->where('ngo_id', Auth::guard('ngo')->id())->get();
     return view('ngo-admin.create-about', compact('abouts'));
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
            'content'=>['min:30', 'required'],
            'image'=>['required', 'max:300', 'mimes:jpg,png,jpeg']
        ]);
            $validation['ngo_id']=Auth::guard('ngo')->id();
             

          if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['image']= $name;
        };

        Aboutngo::create($validation);
        return back()->with('success', 'About page was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aboutngo  $aboutngo
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutngo $aboutngo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aboutngo  $aboutngo
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutngo $aboutngo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aboutngo  $aboutngo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutngo $aboutngo)
    {
            $validation=request()->validate([    
            'content'=>'required|min:6'
        ]);

if (request()->hasFile('image')){

     request()->validate([
            'image'=>'required|max:300|mimes:jpeg,jpg,png'
        ]);

          if ($aboutngo->id) {
        $usersImage = public_path("ngogallery/{$aboutngo->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['image']= $name;
}

}

     $aboutngo->update($validation);        
     session()->flash('success', 'News record successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aboutngo  $aboutngo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutngo $aboutngo)
    {
        //
    }
}
