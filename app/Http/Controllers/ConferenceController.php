<?php

namespace App\Http\Controllers;

use App\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConferenceCreated;
use App\Mail\submissionAccepted;
class ConferenceController extends Controller
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
            'name'=>'required | min:5',
            'email'=>'min:3 | required',
            'title'=>'required | min:6',
            'author'=>'required | min:3',
            'university'=>'required | min:10',
            'keywords'=>'required | min:8',
            'abstract'=>'required | min:30',
            'filename'=> 'required | max:5000 | mimes:doc,docx,pdf'
        ],

        ['filename.max' => 'The paper attached size should not be more than 5mb',
             'filename.mimes'=>'The attached file must be doc, docx or pdf'
        ]);

        if(request()->hasFile('filename')){

     $file = Input::file('filename');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('documentconf'), $name);
        $validation['filename']= $name;
        };      
       

   $conference=Conference::create($validation);
   \Mail::to($request->email)->send(
    new ConferenceCreated($conference)
   );

   session()->flash('success', 'You have successfully submitted, thank you');

return redirect('/conference2019');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function show(Conference $conference)
    {
        return view('admcp.conference-info-display', compact('conference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function edit(Conference $conference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conference $conference)
    {
        $conference->update([
         'accepted'=>request()->has('accepted')
         
        ]);

   \Mail::to($conference->email)->send(
    new submissionAccepted($conference)
   );
         session()->flash('success', 'This paper submission has been accepted and automatic acceptance mail has been sent to the author, thanks');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conference $conference)
    {
        if ($conference->id) {
    

        $usersImage = public_path("documentconf/{$conference->filename}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $conference->delete();
        session()->flash('success', 'You have successfully deleted the record');
        return redirect('/admin/conference2019');
    

    }
    }
    
}
