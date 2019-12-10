<?php

namespace App\Http\Controllers;

use App\Staevent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class StateEventController extends Controller
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
         $events=DB::table('staevents')->where('state_id', Auth::guard('state')->id())->orderBy('id', 'desc')->get();
       return view('admin-state.view-event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-state.create-event');
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
            $validation['state_id']=Auth::guard('state')->id();


          if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('stategallery'), $name);
        $validation['image']= $name;
        };

        Staevent::create($validation);
        return back()->with('success', 'Event or conference was successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staevent  $staevent
     * @return \Illuminate\Http\Response
     */
    public function show(Staevent $staevent)
    {
        return view('admin-state.display-events', compact('staevent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staevent  $staevent
     * @return \Illuminate\Http\Response
     */
    public function edit(Staevent $staevent)
    {
         return view('admin-state.edit-stateevent', compact('staevent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staevent  $staevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staevent $staevent)
    {
           $validation=request()->validate([    
            'title'=>'required|min:6',
            'location'=>'required|min:3',
            'date'=>'required|min:3',
            'event_details'=>'required|min:10'
        ]);

if (request()->hasFile('image')) {


     request()->validate([
            'image'=>'required|max:500|mimes:jpeg,jpg,png'
        ]);

          if ($staevent->id) {
        $usersImage = public_path("stategallery/{$staevent->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('stategallery'), $name);
        $validation['image']= $name;
}

}

$staevent->update($validation);
              
     session()->flash('success', 'Event/Conference record successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staevent  $staevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staevent $staevent)
    {
       if ($staevent->id) {
    

        $usersImage = public_path("stategallery/{$staevent->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $staevent->delete();
        return back()->with('success', 'You have successfully deleted a record');
    

    }
    }
}
