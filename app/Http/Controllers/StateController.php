<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exestate;
use App\Stagallery;
use App\Staslider;
use App\Staevent;
use Auth;

class StateController extends Controller
{
     public function __construct()
    {
     
    $this->middleware("auth:state");
    }

public function index()
{
	$executives=Exestate::where('state_id', Auth::guard('state')->id());
	$gallerys=Stagallery::where('state_id', Auth::guard('state')->id());
	$sliders=Staslider::where('state_id', Auth::guard('state')->id());
	$events=Staevent::where('state_id', Auth::guard('state')->id());
	return view('admin-state.index', compact(['executives', 'gallerys', 'sliders','events']));

}

}
