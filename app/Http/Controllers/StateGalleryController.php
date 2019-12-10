<?php

namespace App\Http\Controllers;

use App\Stagallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;
class StateGalleryController extends Controller
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

       $galleries=DB::table('stagalleries')->where('state_id', Auth::guard('state')->id())->orderBy('id', 'desc')->paginate(9);
       return view('admin-state.view-gallery', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin-state.create-gallery');
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
            'caption'=>['min:3'],           
            'image'=> ['required', 'max:500','mimes:jpg,png,jpeg']
        ]);

          $validation['state_id']=Auth::guard('state')->id(); 
          

        if(request()->hasFile('image')){

     $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('stategallery'), $name);
        $validation['image']= $name;
        };
        
        Stagallery::create($validation);
        return back()->with('success', 'Image successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stagallery  $stagallery
     * @return \Illuminate\Http\Response
     */
    public function show(Stagallery $stagallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stagallery  $stagallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Stagallery $stagallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stagallery  $stagallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stagallery $stagallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stagallery  $stagallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stagallery $stagallery)
    {
        if ($stagallery->id) {
    

        $usersImage = public_path("stategallery/{$stagallery->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $stagallery->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();

    }
}
    
}
