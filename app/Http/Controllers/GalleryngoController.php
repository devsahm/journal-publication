<?php

namespace App\Http\Controllers;

use App\Galleryngo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;
class GalleryngoController extends Controller
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
    $galleries=DB::table('galleryngos')->where('ngo_id', Auth::guard('ngo')->id())->orderBy('id', 'desc')->paginate(9);
       return view('ngo-admin.view-gallery', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(' ngo-admin.create-gallery');
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

          $validation['ngo_id']=Auth::guard('ngo')->id(); 
          

        if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['image']= $name;
        };
        
        Galleryngo::create($validation);
        return back()->with('success', 'Image successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galleryngo  $galleryngo
     * @return \Illuminate\Http\Response
     */
    public function show(Galleryngo $galleryngo)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galleryngo  $galleryngo
     * @return \Illuminate\Http\Response
     */
    public function edit(Galleryngo $galleryngo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galleryngo  $galleryngo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galleryngo $galleryngo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galleryngo  $galleryngo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galleryngo $galleryngo)
    {
         if ($galleryngo->id) {
    

        $usersImage = public_path("ngogallery/{$galleryngo->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $galleryngo->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();

    }
    }
}
