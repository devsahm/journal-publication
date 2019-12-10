<?php

namespace App\Http\Controllers;

use App\Article;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
     
    $this->middleware("auth:admin");
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
            'email'=>['min:3'],
            'title'=>['required', 'min:6'],
            'author'=>['required', 'min:3'],
            'university'=>['required', 'min:10'],
            'keywords'=>['required', 'min:8'],
            'abstract'=>['required', 'min:30'],
            'uploadone'=> ['required','max:2000', 'mimes:doc,docx,pdf']
        ]);

          $validation['writer_id']=Auth::guard('writer')->id(); 
          $validation['email']=Auth::guard('writer')->user()->email;
         
      
      



        if(request()->hasFile('uploadone')){

     $file = Input::file('uploadone');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('uploads'), $name);
        $validation['uploadone']= $name;
        };

 

     

       
       
       
$article=Article::create($validation);

session()->flash('success', 'Article was successfully submitted, thank you');

return redirect('/writer/submit-article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
         return view('admcp.article-display', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
         return view('admcp.edit-article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

          if($request->confirmed){  
          $article->update([
         'confirmed'=>request()->has('confirmed')   
         ]);
         return back();
        }
        

        $validation=request()->validate([

            'title'=>'required|min:6',
            'author'=>'required|min:6',
            'abstract'=>'required|min:20',
            'keywords'=>'required|min:30',
            'pagenumber'=>'required|min:3'

        ]);



        if(request()->hasFile('uploadone')){

        $usersImage = public_path("uploads/{$article->uploadone}"); 
        if (File::exists($usersImage)){ 
            unlink($usersImage);
        }
            $validation=request()->validate([
            'uploadone'=>'mimes:pdf'
          ],

          ['uploadone.mimes' => 'The article type format should be a pdf'       
        ]);

        $file = Input::file('uploadone');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('uploads'), $name);
        $validation['uploadone']= $name;
        };

         $article->update($validation);

     session()->flash('success', 'Article was successfully updated');
     return back();

        //   $article->update([
        //  'confirmed'=>request()->has('confirmed')
         
        // ]);

        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        



        if ($article->id) {
    

        $usersImage = public_path("uploads/{$article->uploadone}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

      
      $article->delete();
        session()->flash('success', 'You have successfully deleted an article record');
        return redirect('/admin/submitted-article');
    

    }
    }
}
