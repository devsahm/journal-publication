<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ngo;
use App\Eventngo;
use App\Newsngo;
use App\Infongo;
use App\Galleryngo;
use App\Sliderngo;
use App\aboutngo;
use DB;
class NgoPagesController extends Controller
{
    public function index($username)
    {
    	$profile=Ngo::where('username', $username)->first();
    	if($username){
    		$ngo_id=$profile->id;
   $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
   $events=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $abouts=DB::table('aboutngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->get();
   $sliders=DB::table('sliderngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->get();
   $news=DB::table('newsngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(4)->get();
   $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row

   if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
      return view('ngo.index', compact('profile', 'events', 'news', 'footerevents', 'ngoinfo','sliders', 'abouts'));

    	}else{

    		abort(404);
    	}
  

    }


    public function event($username)
    {
    	$profile=Ngo::where('username', $username)->first();
    	if($username){
    		$ngo_id=$profile->id;
   $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
   $events=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->paginate(6);
   $sideevents=DB::table('newsngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row

    if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
      return view('ngo.event', compact('profile', 'sideevents', 'events', 'footerevents', 'ngoinfo'));

    	}else{

    		abort(404);
    	}
  

    }


     public function eventdetails($username, $slug)
    {
    	  	
   $profile=Ngo::where('username', $username)->first();
   if($username && $slug){
   $ngo_id=$profile->id;
   $eventdetails=Eventngo::where('slug', $slug)->first();
   $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
   $events=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->paginate(6);
   $sideevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row

    if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
      return view('ngo.event-details', compact('profile', 'sideevents', 'events', 'footerevents', 'ngoinfo','eventdetails'));

    	}else{

    		abort(404);
    	}
  

    }


    public function eventsearch($username){

     $searchTerm=request('keyword');
   
    $profile=Ngo::where('username', $username)->first();
     if($username){
     $ngo_id=$profile->id; 
     $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
    $events=Eventngo::query()
    ->where('ngo_id', '=', $ngo_id)
   ->where('title', 'LIKE', "%{$searchTerm}%") 
   ->get();
 $eventsidebars=DB::table('eventngos')->where('ngo_id', '=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
 $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get(); 
 $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row
 if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
    return view('ngo.event-search', compact([ 'footerevents',  'eventsidebars', 'profile', 'events', 'ngoinfo']));
   }else{

   	abort(404);
   }

    }

       public function news($username)
    {
    	$profile=Ngo::where('username', $username)->first();
    	if($username){
    		$ngo_id=$profile->id;
   $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
 
   $news=DB::table('newsngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->paginate(6);
   $sideevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row

    if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
      return view('ngo.news', compact('profile', 'sideevents', 'footerevents', 'ngoinfo', 'news'));

    	}else{

    		abort(404);
    	}
  

    }


       public function about($username)
    {
      $profile=Ngo::where('username', $username)->first();
      if($username){
        $ngo_id=$profile->id;
   $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
 
   $abouts=DB::table('aboutngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->get();
   $sideevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row

    if(!isset($ngoinfo)){
    $ngoinfo = $dummyinfo;
   }
      return view('ngo.about', compact('profile', 'sideevents', 'footerevents', 'ngoinfo', 'abouts'));

      }else{

        abort(404);
      }
  

    }


    public function newsdetails($username, $slug)
    {
    	
    	
    	$profile=Ngo::where('username', $username)->first();
    	if($username && $slug){
    	$ngo_id=$profile->id;
   $newsdetails=Newsngo::where('slug', $slug)->first();
   $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
   $events=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->paginate(6);
   $sideevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row

    if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
      return view('ngo.news-details', compact('profile', 'sideevents', 'events', 'footerevents', 'ngoinfo','newsdetails'));

    	}else{

    		abort(404);
    	}
  

    }


     public function newsearch($username){

     $searchTerm=request('keyword');
   
    $profile=Ngo::where('username', $username)->first();
     if($username){
     $ngo_id=$profile->id; 
    $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
    $news=Eventngo::query()
   ->where('ngo_id', '=', $ngo_id)
   ->where('title', 'LIKE', "%{$searchTerm}%") 
   ->get();
 $newsidebars=DB::table('newsngos')->where('ngo_id', '=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
 $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get(); 
 $dummyinfo=Infongo::where('ngo_id', 888888)->first(); //dummy row
 if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
    return view('ngo.news-search', compact([ 'footerevents',  'newsidebars', 'profile', 'news', 'ngoinfo']));
   }else{

   	abort(404);
   }

    }




       public function gallery($username)
    {

   $profile=Ngo::where('username', $username)->first();
   if($username){
   $ngo_id=$profile->id;
   $ngoinfo=Infongo::where('ngo_id', $ngo_id)->first();
   $gallerys=DB::table('galleryngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->paginate(10);
   $events=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $footerevents=DB::table('eventngos')->where('ngo_id','=', $ngo_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Infongo::where('ngo_id', 888888)->first();//dummy row

    if(!isset($ngoinfo)){
   	$ngoinfo = $dummyinfo;
   }
      return view('ngo.gallery', compact('profile', 'events', 'footerevents', 'ngoinfo', 'gallerys'));

    	}else{

    		abort(404);
    	}
  

    }







}
