<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{

    //     public function __construct()
    // {
     
    // $this->middleware("auth:admin");
    // }

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
            'image'=> 'max:2000|mimes:png,jpg,jpeg'
        ],

             [ 'details.required' => 'The news details is required',
             'image.size'=> 'The image size should not be more than 2mb'
        ]);
         
      
      



        if(request()->hasFile('image')){

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('blogimages'), $name);
        $validation['image']= $name;
        };
        Blog::create($validation);
        session()->flash('success', 'Blog news was successfully created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admcp.news-display', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
       return view('admcp.edit-news', compact('blog')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // $blog->update(request(['title', 'details']));
        // return back();
        
        $blog->update(request()->validate([    
            'title'=>'required|min:6',
            'details'=>'required|min:30'
        ]));

     session()->flash('success', 'Blog news was successfully updated');
     return back();
         
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {

         if ($blog->id) {


        $usersImage = public_path("blogimages/{$blog->image}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

     
      $blog->delete();
        session()->flash('success', 'You have successfully deleted a blog post');
        return redirect('/admin/news-list');
    

    }

    }
}
