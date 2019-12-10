<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exestate;
use App\State;
use App\Stagallery;
use App\Stateinfo;
use App\Staevent;
use App\Staslider;
use DB;
use Route;

class StateChapterController extends Controller
{
 


    public function index($state)
    {

  $state=State::where('state', $state)->first();
   if($state){
   $state_id=$state->id;
   $stateinfo=Stateinfo::where('state_id', $state_id)->first();
   $events=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->take(3)->get();
    $gallerys=DB::table('stagalleries')->where('state_id','=', $state_id)->orderBy('id', 'desc')->take(7)->get();
    $sliders=DB::table('stasliders')->where('state_id','=', $state_id)->orderBy('id', 'desc')->get();
   $dummyinfo=Stateinfo::where('state_id', 888888)->first(); //dummy row


   if(!isset($stateinfo)){
   	$stateinfo = $dummyinfo;
   }

	return view('africa.state-chapter', compact(['state', 'stateinfo', 'events', 'gallerys', 'sliders']));
}else{

	abort(404);
}


    }



    public function eventlist($state){

     $state=State::where('state', $state)->first();
     if($state){
    $state_id=$state->id;
   $stateinfo=Stateinfo::where('state_id', $state_id)->first();
   $events=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->paginate(3);
   // $events=Staevent::where('state_id','=', $state_id)->paginate();
   $sideevents=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->take(3)->get();
   $dummyinfo=Stateinfo::where('state_id', 888888)->first(); //dummy row

      if(!isset($stateinfo)){
   	$stateinfo = $dummyinfo;
   }


    return view('africa.stateevent-list', compact(['state', 'events', 'stateinfo','sideevents']));
   }else{

   	abort(404);
   }

    }


    public function eventdetails($state, $id){
   $eventdetails=Staevent::findorFail($id);
     $state=State::where('state', $state)->first();
     if($state){
    $state_id=$state->id;
   $stateinfo=Stateinfo::where('state_id', $state_id)->first();
   $sideevents=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->take(3)->get();
   $eventdetails=Staevent::findorFail($id);
$events=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->take(3)->get();
   						  
   $dummyinfo=Stateinfo::where('state_id', 888888)->first(); //dummy row

      if(!isset($stateinfo)){
   	$stateinfo = $dummyinfo;
   }


    return view('africa.stateevent-details', compact(['state', 'stateinfo','sideevents', 'eventdetails', 'events']));
   }else{

   	abort(404);
   }

    }



    public function executives($state){

     $state=State::where('state', $state)->first();
     if($state){
    $state_id=$state->id;
   $stateinfo=Stateinfo::where('state_id', $state_id)->first();
   $events=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->paginate(3);
   // $events=Staevent::where('state_id','=', $state_id)->paginate();
   $executives=DB::table('exestates')->where('state_id','=', $state_id)->orderBy('id', 'asc')->get();
   $dummyinfo=Stateinfo::where('state_id', 888888)->first(); //dummy row

      if(!isset($stateinfo)){
   	$stateinfo = $dummyinfo;
   }


    return view('africa.state-executives', compact(['state', 'events', 'stateinfo','executives']));
   }else{

   	abort(404);
   }

    }



    public function executivesdetails($state, $id){

     $state=State::where('state', $state)->first();
     if($state){
    $state_id=$state->id;
   $stateinfo=Stateinfo::where('state_id', $state_id)->first();
   $events=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->paginate(3);
   // $events=Staevent::where('state_id','=', $state_id)->paginate();
   $executive=Exestate::where('id', $id)->first();
   $dummyinfo=Stateinfo::where('state_id', 888888)->first(); //dummy row

      if(!isset($stateinfo)){
   	$stateinfo = $dummyinfo;
   }


    return view('africa.state-executives-details', compact(['state', 'events', 'stateinfo','executive']));
   }else{

   	abort(404);
   }

    }



    public function gallery($state){

     $state=State::where('state', $state)->first();
     if($state){
    $state_id=$state->id;
   $stateinfo=Stateinfo::where('state_id', $state_id)->first();
   $events=DB::table('staevents')->where('state_id','=', $state_id)->orderBy('id', 'desc')->paginate(3);

   $gallerys=DB::table('stagalleries')->where('state_id','=', $state_id)->orderBy('id', 'desc')->paginate(10);
   $dummyinfo=Stateinfo::where('state_id', 888888)->first(); //dummy row
      if(!isset($stateinfo)){
   	$stateinfo = $dummyinfo;
   }


    return view('africa.gallery-state', compact(['state', 'events', 'stateinfo','gallerys']));
   }else{

   	abort(404);
   }

    }


    public function eventsearch($state){



    
  

     $searchTerm=request('keyword');

     $state=State::where('state', $state)->first();
     if($state){
     $state_id=$state->id;
    $events=Staevent::query()
    ->where('state_id', '=', $state_id)
   ->where('title', 'LIKE', "%{$searchTerm}%") 
   ->get();
 $eventsidebars=DB::table('staevents')->where('state_id', '=', $state_id)->orderBy('id', 'desc')->take(3)->get();
 
   $stateinfo=Stateinfo::where('state_id', $state_id)->first();
   $dummyinfo=Stateinfo::where('state_id', 888888)->first(); //dummy row

      if(!isset($stateinfo)){
   	$stateinfo = $dummyinfo;
   }


    return view('africa.state-event-search', compact(['state', 'events', 'stateinfo', 'eventsidebars']));
   }else{

   	abort(404);
   }

    }





}
