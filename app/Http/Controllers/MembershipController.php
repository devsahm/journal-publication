<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use App\Mregister;
use Auth;
use DB;
class MembershipController extends Controller
{

	 public function __construct()
    {
     
    $this->middleware("auth");
    }


    public function index()
    {

    	$id=auth()->user()->id;
    	$member=User::findorFail($id);

       $summarys=DB::table('summaries')->where('member_id', '=', auth()->user()->id)->get();
       foreach ($summarys as $summary) {
        if ($summary->finish != 0) {
          return redirect('/congratulations/result')->with('success', 'your application has been completed');
        }
       }

       $mregisters=DB::table('mregisters')->where('member_id', '=', auth()->user()->id)->get();  
    	return view('africa.members-registration', compact(['member', 'mregisters']));

    }

      public function academic()
    {

    $academics=DB::table('academics')->where('member_id', '=', auth()->user()->id)->get();
     return view('africa.academic-qualification', compact(['academics']));
 

    	

    }

      public function professional()
      {
    $trainings=DB::table('trainings')->where('member_id', '=', auth()->user()->id)->get();
    	return view('africa.professional-qualification', compact('trainings'));

    }

     public function history()
      {
        $employments=DB::table('employments')->where('member_id', '=', auth()->user()->id)->get();
    	return view('africa.employment-history', compact('employments'));

    }

     public function referee()
      {
         $sponsors=DB::table('sponsers')->where('member_id', '=', auth()->user()->id)->get();
      return view('africa.referee', compact('sponsors'));
    	

    }

 public function payment()
      {
         $payments=DB::table('payments')->where('member_id', '=', auth()->user()->id)->get();
    	return view('africa.payment-application', compact('payments'));

    }

      public function summary()
      {
         $trainings=DB::table('trainings')->where('member_id', '=', auth()->user()->id)->get();
        $memberinfo=DB::table('mregisters')->where('member_id', '=', auth()->user()->id)->get();
         $qualifications=DB::table('academics')->where('member_id', '=', auth()->user()->id)->get();
            $employments=DB::table('employments')->where('member_id', '=', auth()->user()->id)->get();
            $sponsors=DB::table('sponsers')->where('member_id', '=', auth()->user()->id)->get();
            $payments=DB::table('payments')->where('member_id', '=', auth()->user()->id)->get();
             $passports=DB::table('passports')->where('member_id', '=', auth()->user()->id)->get();

      return view('africa.registration-summary', compact(['memberinfo', 'qualifications', 'trainings', 'employments', 'sponsors', 'payments', 'passports']));

    }
     public function photograph()
      {
         $passports=DB::table('passports')->where('member_id', '=', auth()->user()->id)->get();
      return view('africa.passport-photograph', compact('passports'));

    }

     public function congrats()
      {
      return view('africa.congratulations');

    }



}
