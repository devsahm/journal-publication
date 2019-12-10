<?php

namespace App\Http\Controllers;

use App\Eventngo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class EventngoController extends Controller
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
    $events=DB::table('eventngos')->where('ngo_id', Auth::guard('ngo')->id())->orderBy('id', 'desc')->get();
    return view('ngo-admin.view-event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ngo-admin.create-event');
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
            'title'=>['min:5', 'required'],
            'date'=>['required'],
            'location'=>['required', 'min:10'],
            'event_details'=>['required', 'min: 10'],
            'image'=>['required', 'max:500', 'mimes:jpg,png,jpeg']
        ]);
            $validation['ngo_id']=Auth::guard('ngo')->id();
            $validation['slug']=str_slug($request->title);


          if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['image']= $name;
        };

        Eventngo::create($validation);
        return back()->with('success', 'Event  was successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eventngo  $eventngo
     * @return \Illuminate\Http\Response
     */
    public function show(Eventngo $eventngo)
    {
        return view('ngo-admin.display-events', compact('eventngo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eventngo  $eventngo
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventngo $eventngo)
    {
        return view('ngo-admin.edit-ngoevent', compact('eventngo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventngo  $eventngo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventngo $eventngo)
    {
         $validation=request()->validate([    
            'title'=>'required|min:6',
            'location'=>'required|min:3',
            'date'=>'required|min:3',
            'event_details'=>'required|min:10'
        ]);

if (request()->hasFile('image')){


     request()->validate([
            'image'=>'required|max:500|mimes:jpeg,jpg,png'
        ]);

          if ($staevent->id) {
        $usersImage = public_path("ngogallery/{$eventngo->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['image']= $name;
}

}
$validation['slug']=str_slug($request->title);
$eventngo->update($validation);
              
     session()->flash('success', 'Event record successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eventngo  $eventngo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventngo $eventngo)
    {
         if ($eventngo->id) {
    

        $usersImage = public_path("ngogallery/{$eventngo->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $eventngo->delete();
        return back()->with('success', 'You have successfully deleted a record');
    

    }
    }
}
