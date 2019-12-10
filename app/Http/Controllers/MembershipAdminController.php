<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\License;
use App\Admin;
use App\Contact;
use App\Blog;
use App\Event;
use App\Member;
use App\Summary;
use App\Subscription;
use App\Mregister;
use App\State;
use App\Ngo;
use DB;
use Auth;
use PDF;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Mail\MembershipRegistrationInfo;
use Illuminate\Support\Facades\Mail;


class MembershipAdminController extends Controller
{


	    public function __construct()
    {
     
    $this->middleware("auth:member");
    }




    public function index()
    {

       $summary=Summary::all();
        $licenses=license::all();
        $subscriptions=Subscription::all();
        $states=State::all();
        $ngos=Ngo::all();



       return view('admin.index', compact(['licenses', 'summary', 'subscriptions', 'states', 'ngos']));

    }

      public function showStateRegisterForm()
    {
        return view('admin.register-state', ['url' => 'state']);
    }


    public function showNgoRegisterForm()
    {
        return view('ngo-admin.register-ngo', ['url' => 'ngo']);
    }

        protected function createState(Request $request)
    {
 

   $request->validate([
            'username'=>'required',
            'state'=>'required',
            'password'=>'required|confirmed|min:8'
          ]);

          if(state::where('state', '=', Input::get('state'))->exists()) {
          session()->flash('customerror', $request->state.' State already exist in our record');
           return back();

          }elseif(state::where('username', '=', Input::get('username'))->exists()) {
                session()->flash('customerror', 'Username already exist, use another username');
                 return back();
            }else{
           $state = State::create([
            'state' => $request['state'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
        ]);
          return back()->with('success', $request->state.' State successfully created');
        }
    }



         protected function createNgo(Request $request)
    {


   $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required|confirmed|min:8'
          ]);

          if(ngo::where('name', '=', Input::get('name'))->exists()) {
          session()->flash('customerror', $request->name.' State already exist in our record');
           return back();

          }elseif(ngo::where('username', '=', Input::get('username'))->exists()) {
                session()->flash('customerror', 'Username already exist, use another username');
                 return back();
            }else{
           $state = Ngo::create([
           
            'name'=>$request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
        ]);
          return back()->with('success', $request->name.' State successfully created');
        }
    }

    public function membershipreg()
    {
        $memberinfo=Mregister::all();

        foreach ($memberinfo as $member) {
          $id=$member->member_id;
          $summary=DB::table('summaries')->where('member_id', '=', $id)->get();
        }

        foreach ($summary as $sum){
          if ($sum->finish == 1) {
             return view('admin.member-registration', compact(['memberinfo']));
          }else{

            return view('admin.member-registration-not'); 
          }
        }


      
  

      // return view('admin.member-registration', compact(['memberinfo']));

    }

       public function licensing()
    {

        $licenses=license::paginate(6);
       return view('admin.licensing-application', compact('licenses')) ;
    }

    public function viewlicensing($id)
    {

        $license=license::findorFail($id);
       return view('admin.display-licensing', compact('license')) ;
    }

    public function viewmembership($id)
    {

        $memid=Mregister::findorFail($id);
        $id=$memid->member_id;
        $members=DB::table('mregisters')->where('member_id', '=', $id)->get();
        $trainings=DB::table('trainings')->where('member_id', '=', $id)->get();
        $qualifications=DB::table('academics')->where('member_id', '=', $id)->get();
        $employments=DB::table('employments')->where('member_id', '=', $id)->get();
        $sponsors=DB::table('sponsers')->where('member_id', '=', $id)->get();
        $payments=DB::table('payments')->where('member_id', '=', $id)->get();
        $passports=DB::table('passports')->where('member_id', '=', $id)->get();
       return view('admin.display-membership', compact(['members', 'trainings', 'qualifications', 'employments', 'sponsors', 'payments', 'passports', 'payments']));
    }


    public function downloadPDF($id){
      $license= license::findorFail($id);

      $pdf = PDF::loadView('admin.regdocument', compact('license'));
      return $pdf->download('registration.pdf');

}

 public function registerPDF($id){
        $memid=Mregister::findorFail($id);
        $id=$memid->member_id;
        $members=DB::table('mregisters')->where('member_id', '=', $id)->get();
        $trainings=DB::table('trainings')->where('member_id', '=', $id)->get();
        $qualifications=DB::table('academics')->where('member_id', '=', $id)->get();
        $employments=DB::table('employments')->where('member_id', '=', $id)->get();
        $sponsors=DB::table('sponsers')->where('member_id', '=', $id)->get();
        $payments=DB::table('payments')->where('member_id', '=', $id)->get();
        $passports=DB::table('passports')->where('member_id', '=', $id)->get();

      $pdf = PDF::loadView('admin.memberdocument', compact(['members', 'trainings', 'qualifications', 'employments', 'sponsors', 'payments', 'passports', 'payments']));
      return $pdf->download('membershp-registration.pdf');

}

  public function loademail($id){
      $member= Mregister::findorFail($id);
   
        return view('admin.member-email-send', compact('member')) ;

}

  public function sendmailing(Request $request){
    $email=$request->email;
    $subject=$request->subject;
    $message=$request->message;

  Mail::to($request->email)->send(new MembershipRegistrationInfo($message, $subject, $message));
  session()->flash('success', 'Email was successfully sent to '.$email);
   
        return back();

}

  public function subscription(Request $request){
   
   $subscriptions=subscription::paginate(10);
        return view('admin.email-lists', compact('subscriptions'));

}

}