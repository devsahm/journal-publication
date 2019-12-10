<?php

namespace App\Http\Controllers;

use App\Passport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
class PassportMemberController extends Controller
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
            'passport'=> 'required|max:250|mimes:jpeg,jpg,png,pdf'],
            [
                'passport.mimes'=>'Image uploaded must be jpg or png ',
                'passport.max'=>'Image uploaded should not be more than 250kb'
            ]);


        if(request()->hasFile('passport')){

     $file = Input::file('passport');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('memberpassport'), $name);
        $validation['passport']= $name;
        };
         $validation['member_id']= auth()->user()->id;

 Passport::create($validation);
 session()->flash('success', 'Passport was successfully added');
 return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function show(Passport $passport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function edit(Passport $passport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passport $passport)
    {
        request()->validate([
            'passport'=>'required|max:250|mimes:jpeg,jpg,png,pdf'
        ]);
          if ($passport->id) {
    

        $usersImage = public_path("memberpassport/{$passport->passport}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }


        if(request()->hasFile('passport')){

     $file = Input::file('passport');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('memberpassport'), $name);
        $validation['passport']= $name;
        };


       $passport->update($validation);
        session()->flash('success', 'You have successfully updated the passport image');
        return back();
    

    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passport $passport)
    {
        //
    }
}
