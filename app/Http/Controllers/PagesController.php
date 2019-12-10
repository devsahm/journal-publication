<?php

namespace App\Http\Controllers;

use App\Article;
use App\Mail\ArticleSubmitted;
use Illuminate\Http\Request;
use App\Volume;
use App\Issue;
use App\Writer;
use App\Blog;
use App\Event;
use DB;
// use DB;
use Carbon\Carbon;

class PagesController extends Controller
{
    //
 // public function __construct()
 //    {
     
 //    $this->middleware("auth:admin")->only(['viewarticle']);
 //    // return redirect('/login/writer');
 //    }

   public function index()
    {
      $latestevents=Event::latest()->get();
      return view('africa.index', compact('latestevents'));
    }

     public function event()
    {
      return view('africa.event');
    }


     public function about()
    {
      return view('africa.vision');
    }


    public function vision()
    {
      return view('africa.vision');
    }

     public function mission()
    {
      return view('africa.mission');
    }

    public function values()
    {
      return view('africa.core-values');
    }

     public function objective()
    {
      return view('africa.objectives');
    }


     public function president()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.president', compact('natures'));
    }

      public function executive()
    {
       $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.executive', compact('natures'));
    }

     public function vicepresidenta()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.vice-presidenta', compact('natures'));
    }

     public function vicepresidentb()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.vice-presidentb', compact('natures'));
    }

     public function vicepresidentc()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.vice-presidentc', compact('natures'));
    }

     public function secretary()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.secretary', compact('natures'));
    }

    public function vicesecretary()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.vice-secretary', compact('natures'));
    }

     public function treasurer()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.treasurer', compact('natures'));
    }

     public function financial()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.financial-secretary',compact('natures'));
    }

     public function publicitysecretary()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.publicity-secretary', compact('natures'));
    }

       public function auditor()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.internal-auditor', compact('natures'));
    }

       public function exofficioa()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.ex-officio-1', compact('natures'));
    }

       public function exofficiob()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.ex-officio-2', compact('natures'));
    }

       public function exofficioc()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.ex-officio-3', compact('natures'));
    }

         public function editorinchief()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.editor-in-chief', compact('natures'));
    }

          public function assistanteditor()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.assistant-ein', compact('natures'));
    }

    public function license()
    {
      return view('africa.license');
    }


    //     public function events()
    // {
    //   return view('africa.event-details');
    // }

       public function members()
    {
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.members', compact('natures'));
    }

       public function licenseinformation()
    {
      return view('africa.license-information');
    }

        public function gallery()
    {
      return view('africa.gallery');
    }

         public function services()
    {
      return view('africa.services');
    }

    public function history()
    {
      return view('africa.history');
    }

     public function comingsoon()
    {
      return view('africa.comingsoon');
    }


    public function guideline()
    {
      return view('africa.author-guideline');
    }

     public function conference()
    {
      return view('africa.conference');
    }

    public function newslist()
    {
    $blogs = DB::table('blogs')->orderBy('id', 'desc')->take(3)->get();
    $news = DB::table('blogs')->orderBy('id', 'desc')->paginate(3);
      return view('africa.newslist', compact(['news', 'blogs']));
    }

     public function newsdetails($id)
    {

      $new=Blog::findorFail($id);
      $blogs = DB::table('blogs')->orderBy('id', 'desc')->get();
      return view('africa.news-details', compact(['new', 'blogs']));
    }

      public function eventlist()
    {
    $sideevents = DB::table('events')->orderBy('id', 'desc')->take(3)->get();
    $events = DB::table('events')->orderBy('id', 'desc')->paginate(3);
      return view('africa.event-list', compact(['sideevents', 'events']));
    }

      public function eventgrid()
    {
    $sideevents= DB::table('events')->orderBy('id', 'desc')->take(3)->get();
    $events = DB::table('events')->orderBy('id', 'desc')->paginate(6);
      return view('africa.event-grid', compact(['sideevents', 'events']));
    }

     public function eventdetails($id)
    {
      $event=Event::findorFail($id);
      $natures = DB::table('events')->orderBy('id', 'desc')->get();
      return view('africa.event-detail', compact(['event', 'natures']));
    }


    public function articlelist($id)
    {

      $volumes=Volume::all();
    $ArticleCount=Article::where('published', '1')->get();
    $issues=Issue::all();
   $issue=Issue::findorFail($id);
    return view('africa.article-list', compact(['volumes','issues', 'ArticleCount', 'issue']));

    }

    public function viewarticle($id)
    {

    $volumes=Volume::all();
    $ArticleCount=Article::where('published', '1')->get();
    $article=Article::findorFail($id);

    return view('africa.article-content', compact(['article', 'volumes', 'ArticleCount']));

    }

     public function search()
    {

        $issues=Issue::all();
          $volumes=Volume::all();
        $ArticleCount=Article::where('published', '1')->get();
         $searchTerm=request('search');

        $articles=Article::query()
   ->where('title', 'LIKE', "%{$searchTerm}%") 
   ->orWhere('author', 'LIKE', "%{$searchTerm}%") 
   ->get();
      

        return view('africa.search-list', compact(['articles', 'volumes', 'ArticleCount', 'issues']));
    }


     public function test()
    {
       return view('admin.profilepdf');
    }

public function eventsearch()
    {
 $natures = DB::table('events')->orderBy('id', 'desc')->get();

         $searchTerm=request('keyword');

        $events=Event::query()
   ->where('title', 'LIKE', "%{$searchTerm}%") 
   ->orWhere('address', 'LIKE', "%{$searchTerm}%") 
   ->get();
      

        return view('africa.event-search-list', compact(['events', 'natures']));
    }


//     public function index()
//     {
// $volumes=Volume::all();
//         if($volumes->count()){
            
//          $issue=Issue::latest()->first();
//         }else{
        
//          $issue=Issue::all();
//         }

//         $Articles=Article::where('published', '1')->get();
        
//         $Articlefooters=Article::where('published', '1')->limit(4)->get();
//         $PublishedArticles=Article::where('published', '1')->get();
//         $volumes=Volume::all();
//         $writer=Writer::all();
//         $AllArticles=Article::all();


//       return view("naiop.index", compact(['issue', 'volumes', 'Articles', 'Articlefooters','PublishedArticles', 'volumes', 'writer', 'AllArticles']));
    	
//     }
    public function publication()
    {
    $volumes=Volume::all();
    $submittedarticles=Article::where('admin', '0')->get();
    $ArticleCount=Article::where('published', '1')->get();
    $issues=Issue::all();

    return view('africa.journal', compact(['submittedarticles','issues', 'volumes', 'ArticleCount']));
   
    }


       public function archives()
    {

    	return view('naiop.archives');
    }

  
   
    public function volumelist()
    {

    $volumes=Volume::all();
    return view('naiop.volume-list', compact('volumes'));

    }

    public function issuelist($id)
    {

    $volumes=Volume::all();
   $issues=Issue::findorFail($id);
    return view('naiop.issue-list', compact(['volumes', 'issues']));

    }

  



   


      public function homesearch()
    {

      
          $volumes=Volume::all();
        $ArticleCount=Article::where('published', '1')->count();
         $searchIssue=request('issue');
         $searchVolume=request('volume');
// dd('working');
        $issues=Issue::where([
    ['issue', '=', $searchIssue],
    ['volume_id', '=', $searchVolume ]  

            ])->get();
      

        return view('naiop.home-search', compact(['issues', 'volumes', 'ArticleCount']));
    }




}
