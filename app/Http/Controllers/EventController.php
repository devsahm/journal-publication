<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class EventController extends Controller
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

            'title'=>'required|min:6',
            'details'=>'required|min:30',
            'image'=> 'required|max:1000|mimes:png,jpg,jpeg',
            'date'=>'required|min:5',
            'address'=>'required|min:10'
        ],

             [ 'details.required' => 'The event details is required',
             'image.max'=> 'The image size should not be more than 1mb'
        ]);
         
      
      



        if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('eventimages'), $name);
        $validation['image']= $name;
        };
        Event::create($validation);
        session()->flash('success', 'New event was successfully created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
          return view('admcp.event-display', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
           return view('admcp.edit-event', compact('event')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
          $event->update(request()->validate([

            'title'=>'required|min:6',
            'address'=>'required|min:6',
            'date'=>'required|min:5',
            'details'=>'required|min:30'
        ]));

     session()->flash('success', 'Event was successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
             if ($event->id) {
    

        $usersImage = public_path("eventimages/{$event->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }
    
      
      $event->delete();
        session()->flash('success', 'You have successfully deleted an event record');
        return redirect('/admin/events-list');
    

    }
    }
}
