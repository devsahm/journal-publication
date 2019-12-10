<?php

namespace App\Http\Controllers;

use App\Newsngo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class NewsngoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=DB::table('newsngos')->where('ngo_id', Auth::guard('ngo')->id())->orderBy('id', 'desc')->get();
        return view('ngo-admin.view-news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ngo-admin.create-news');
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
            'news_details'=>['required', 'min: 10'],
            'image'=>['required', 'max:300', 'mimes:jpg,png,jpeg']
        ]);
            $validation['ngo_id']=Auth::guard('ngo')->id();
             $validation['slug']=str_slug($request->title);

          if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('ngogallery'), $name);
        $validation['image']= $name;
        };

        Newsngo::create($validation);
        return back()->with('success', 'News was successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsngo  $newsngo
     * @return \Illuminate\Http\Response
     */
    public function show(Newsngo $newsngo)
    {
         return view('ngo-admin.display-news', compact('newsngo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsngo  $newsngo
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsngo $newsngo)
    {
        return view('ngo-admin.edit-ngonews', compact('newsngo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsngo  $newsngo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsngo $newsngo)
    {
             $validation=request()->validate([    
            'title'=>'required|min:6',
            'news_details'=>'required|min:10'
        ]);

if (request()->hasFile('image')){


     request()->validate([
            'image'=>'required|max:300|mimes:jpeg,jpg,png'
        ]);

          if ($newsngo->id) {
        $usersImage = public_path("ngogallery/{$newsngo->image}"); 
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
     $newsngo->update($validation);        
     session()->flash('success', 'News record successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsngo  $newsngo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsngo $newsngo)
    {
          if ($newsngo->id) {
    

        $usersImage = public_path("ngogallery/{$newsngo->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $newsngo->delete();
        return back()->with('success', 'You have successfully deleted a record');
    

    }
    }
}
