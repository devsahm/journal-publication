<?php

namespace App\Http\Controllers;
use App\Article;
use App\Volume;
use Illuminate\Http\Request;
use App\Issue;
use App\Writer;
use App\Admin;
use App\Contact;
use App\Blog;
use App\Event;
use App\Conference;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Mail\ArticleSubmission;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //


     public function __construct()
    {
     
    $this->middleware("auth:admin");
    }

    public function dashboard()
    {
        $issues=Issue::all();
        $volumes=Volume::all();
        $articles=Article::where('admin', '0')->get();
        $writers=Writer::all();
        $conferences=Conference::all();
        $PublishedArticles=Article::where('published', '1')->get();
       return view('admcp.index', compact(['issues', 'volumes', 'articles', 'PublishedArticles', 'writers','conferences']));
    }


          public function submitted()
    {

   		$articles=Article::where('admin', '=', '0')->paginate(8);
       	return view('admcp.submitted-article', compact('articles'));
    }


     public function volumecreate()
    {

       	return view('admcp.create-volume');
    }

     public function publication()
    {



         $articles = Article::where('published', '=', '0')
      ->where('admin', '=', '1')->get();
      $volumes = Volume::all();
        return view('admcp.publication', compact(['articles', 'volumes']));

      
    }


       public function viewpublication()
    {
    	$volumes=Volume::paginate(5);
       	return view('admcp.publication-view', compact('volumes'));
    }


        public function published()
    {
    	  $articles=Article::where('published', '1')->paginate(5);
        return view('admcp.article-published', compact('articles'));
    }


         public function contact()
    {
    	  $contacts=Contact::where('removed', '0')->paginate(4);
        return view('admcp.contact', compact('contacts'));
    }

      public function contactread()
    {
        $contacts=Contact::where('removed', 'o')->paginate(4);
        return view('admcp.contact-read', compact('contacts'));
    }

        public function contacttrash()
    {
        $contacts=Contact::where('removed', '1')->paginate(4);
        return view('admcp.contact-trash', compact('contacts'));
    }


        public function registered()
    {
        $writers=Writer::paginate(4);
        return view('admcp.registered-users', compact('writers'));
    }


        public function sendmail($id)
    {
          $writer=Article::findorFail($id);
          $writerid=$writer->writer_id;
          $WriterInstance=Writer::findorFail($writerid);
        return view('admcp.send-email', compact(['writer', 'WriterInstance']));
    }

      public function conferenceemail($id)
    {
      $writer=Conference::findorFail($id);
      return view('admcp.conference-send-email', compact('writer'));
    }



     public function mailingconference(Request $request)
    {   
      $Email=request('email');
      $title=request()->title;
      $details=request()->message;

    

session()->flash('success', 'Mail was successfully sent to '.$Email);



return back();

    }

      public function emailconfirmation(Request $request)
    {  
      $name=$request->name;
     $email=$request->email;
      $subject=$request->title;
    $message=$request->message;

    Mail::to($request->email)->send(new ArticleSubmission($message, $subject, $name));
     
      

session()->flash('success', 'Mail was successfully sent to '.$email);



return back();

    }

   public function newsupload()
    {   
         
        return view('admcp.news-upload');
    }

     public function newslist()
    {   
    $blogs = DB::table('blogs')->orderBy('id', 'desc')->paginate(6);
    return view('admcp.news-list', compact('blogs'));
         
    }

     public function eventsupload()
    {   
         
      return view('admcp.upload-event');
    }

      public function viewconference()
    {   
          $conferences=DB::table('conferences')->orderBy('id', 'desc')->paginate(8);
      return view('admcp.view-conference', compact('conferences'));
    }


     public function eventslist()
    {   

      $events= DB::table('events')->orderBy('id', 'desc')->paginate(6);
    return view('admcp.event-list', compact('events'));
         
    }

    public function storearticle(Request $request)
    {

     $validation=request()->validate([
            'title'=>'required|min:6',
            'author'=>'required|min:3',
            'keywords'=>'required|min:10',
            'pagenumber'=>'required',
            'abstract'=>'required|min:30',
            'uploadone'=> 'required|max:1000|mimes:doc,docx,pdf'
        ],
            ['uploadone.max' => 'The manuscript file size should not be more than 1mb',
             'pagenumber.required'=>'The page numberis required'
        ]);
       
   if(request()->hasFile('uploadone')){

     $file = Input::file('uploadone');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('uploads'), $name);
        $validation['uploadone']= $name;
        };
         $validation['admin']= '1';

        Article::create($validation);
       
        return redirect('/admin/publication')->with('successfast', 'Article successfully uploaded');
}



    //  public function messagecontrol($id)
    // {
    //   $contact=Contact::findorFail('id');
    //   $contact->seen='1';
    //   $contact->save();
    // return redirect('/contacts/{{ $contact->id }}');
    // }

   




  


}
