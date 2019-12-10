<?php

namespace App\Http\Controllers;

use App\Infongo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class InfongoController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infos=DB::table('infongos')->where('ngo_id', Auth::guard('ngo')->id())->get();
        return view('ngo-admin.create-ngoinfo', compact('infos'));
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
            'location'=>['min:5', 'required'],
            'email'=>['required', 'email'],
            'phone_number'=>['required', 'min:10', 'numeric'],
            'logo'=>['required', 'max:800']
        ]);
                if(request()->hasFile('logo')){

        $file = Input::file('logo');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['logo']= $name;
        };

        $validation['ngo_id']=Auth::guard('ngo')->id();
        Infongo::create($validation);
        return back()->with('success', 'Record was added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Infongo  $infongo
     * @return \Illuminate\Http\Response
     */
    public function show(Infongo $infongo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Infongo  $infongo
     * @return \Illuminate\Http\Response
     */
    public function edit(Infongo $infongo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infongo  $infongo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infongo $infongo)
    {
          $validation=request()->validate([    
      
            'location'=>'required|min:3',
            'email'=>'required',
            'phone_number'=>'required|min:10|numeric'
        ]);

                 if ($infongo->id) {
        $usersImage = public_path("ngogallery/{$infongo->logo}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

    request()->validate([
         'logo'=>'required|max:300'
     ]);

        $file = Input::file('logo');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['logo']= $name;
}
       $infongo->update($validation);
       return back()->with('success', 'record was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Infongo  $infongo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infongo $infongo)
    {
        //
    }
}
