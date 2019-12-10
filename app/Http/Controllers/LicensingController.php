<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class LicensingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

            'surname'=>'required|min:3',
            'firstname'=>'required|min:3',
            'othername'=>'required|min:2',
            'title'=> 'required',
            'state'=> 'required',
            'dob'=>'required',
            'email'=>'required',
            'nationality'=>'required',
            'business_name'=>'required| min:5',
            'business_address'=>'required|min:8',
            'telephone'=>'required|numeric',
            'job_title'=>'required',
            'registration'=>'required',
            'passport'=>'required|max:200|mimes:png,jpg,jpeg',
            'evidence'=>'required|mimes:pdf,doc,docx',
            'payment'=>'required|mimes:png,jpg,jpeg,pdf'

        ],

             [ 'dob.required' => 'The date of birth field is required',
             'payment.mimes' => 'The payment proof must be either  jpg/png or pdf',
             'evidence.mimes'=>'The conference evidence must be a file of type: pdf, doc, docx'
             
        ]);



        if(request()->hasFile('passport')){

        $file = Input::file('passport');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('passportphoto'), $name);
        $validation['passport']= $name;
        };


         if(request()->hasFile('evidence')){

        $file = Input::file('evidence');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('evidencedoc'), $name);
        $validation['evidence']= $name;
        };

         if(request()->hasFile('payment')){

        $file = Input::file('payment');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('paymentpicture'), $name);
        $validation['payment']= $name;
        };


        $workshops = $request->input('workshop');
        $workshop=implode("*", $workshops);
         $validation['workshop']= $workshop;
      

        $cerficates = $request->input('cerficate');
       $cerficate=implode("*", $cerficates);
         $validation['cerficate']= $cerficate;
        

        License::create($validation);
        session()->flash('success', 'You have successfully applied for Practicing License. Your application will be reviewed and we will get back to you soon, thanks');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function show(License $license)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function edit(License $license)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, License $license)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function destroy(License $license)
    {
    


        if ($license->id) {
    

        $usersImagePay = public_path("paymentpicture/{$license->payment}"); 
        if (File::exists($usersImagePay)) { 
            unlink($usersImagePay);
        }


         $usersImageEvidence = public_path("evidencedoc/{$license->evidence}"); 
        if (File::exists($usersImageEvidence)) { 
            unlink($usersImageEvidence);
        }

          $usersImagePass = public_path("passportphoto/{$license->passport}"); 
        if (File::exists($usersImagePass)) { 
            unlink($usersImagePass);
        }


      
      $license->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();
    

    }
    }
}
