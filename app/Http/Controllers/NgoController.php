<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infongo;
use App\Galleryngo;
use App\Eventngo;
use App\Sliderngo;
use App\Newsngo;
use Auth;
class NgoController extends Controller
{
    public function __construct()
    {
     
    $this->middleware("auth:ngo");
    }


	public function index()
	{
    $infos=Infongo::where('ngo_id', Auth::guard('ngo')->id());
	$gallerys=Galleryngo::where('ngo_id', Auth::guard('ngo')->id());
	$sliders=Sliderngo::where('ngo_id', Auth::guard('ngo')->id());
	$events=Eventngo::where('ngo_id', Auth::guard('ngo')->id());
	$news=Newsngo::where('ngo_id', Auth::guard('ngo')->id());
	return view('ngo-admin.index', compact(['gallerys', 'infos','events', 'sliders','news']));
}

}
