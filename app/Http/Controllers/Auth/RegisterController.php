<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Writer;
use App\Member;
use App\State;
use App\Ngo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\AuthorRegistration;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/membership/general-information';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        

            $this->middleware('guest');
            $this->middleware('guest:admin');
            $this->middleware('guest:writer');
            $this->middleware('guest:member');
            $this->middleware('guest:state');
            $this->middleware('guest:ngo');

    }

     public function showRegistrationForm()
    {
    return view('africa.register-member');
    }
  

    public function showAdminRegisterForm()
    {
        return redirect('/');
        // return view('auth.register', ['url' => 'admin']);
    }


    public function showWriterRegisterForm()
    {
        return view('africa.register', ['url' => 'writer']);
    }



    

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->intended('login/admin');
    }

    protected function createWriter(Request $request)
    {
        $this->validator($request->all())->validate();
        // Get the value from the form
            $input['email'] = Input::get('email');

            // Must not already exist in the `email` column of `writers` table
            $rules = array('email' => 'unique:writers,email');

            $validators = Validator::make($input, $rules);

            if ($validators->fails()){
                session()->flash('customerror', 'Email already exist, try again');
                return back();
            }else{
           $writer = Writer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'image'=>$request['image'],
        ]);
           
        Mail::to($request->email)->send(new AuthorRegistration($writer));
       return redirect()->intended('login/writer');
        }
    }



     protected function createMember(Request $request)
    {
        $this->validator($request->all())->validate();
        // Get the value from the form
            $input['email'] = Input::get('email');

            // Must not already exist in the `email` column of `users` table
            $rules = array('email' => 'unique:writers,email');

            $validators = Validator::make($input, $rules);

            if ($validators->fails()) {
                session()->flash('customerror', 'Email already exist, try again');
                 return back();
            }else{
           $writer = Member::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'image'=>$request['image'],
        ]);
           
        // Mail::to($request->email)->send(new AuthorRegistration($writer));
       return redirect()->intended('login/member');
        }
    }



    //  protected function createState(Request $request)
    // {
    //     dd('jddjdjd');
    //     $this->validator($request->all())->validate();
    //     // Get the value from the form
    //         $input['username'] = Input::get('username');
    //         $input['state']= Input::get('state');

    //         // Must not already exist in the `state` and `username` column of `states` table
    //         $rules= array('username' => 'unique:states,username');
    //         $rulestate= array('state' => 'unique:states,state');


    //         $validators = Validator::make($input, $rules);
    //         $validatorstate = Validator::make($input, $rulestate);
    //         if ($validators->fails()) {
    //             session()->flash('customerror', 'Username already exist, try again');
    //              return back();
    //         }elseif ($validatorstate->fails()) {
    //             session()->flash('customerror', 'State already exist, try again');
    //              return back();
    //         }else{
    //        $writer = State::create([
    //         'state' => $request['state'],
    //         'username' => $request['username'],
    //         'password' => Hash::make($request['password']),
    //     ]);
    //        dd('submitted');
    //    // return redirect()->intended('/state');
    //     }
    // }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
