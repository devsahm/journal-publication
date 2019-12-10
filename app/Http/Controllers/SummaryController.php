<?php

namespace App\Http\Controllers;

use App\Summary;
use Illuminate\Http\Request;
use App\Mail\ApplicationCompletion;

class SummaryController extends Controller
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
            'finish'=> 'required',
            'question'=>'required',
            'dismiss'=>'required',
        ],
            [
                'finish.required'=>'The click the I AGREE checkbox below the page to complete your application',
                'question.required'=>'Answer the first question below this page before submitting',
                 'dismiss.required'=>'Answer the second question below this page before submitting',
               
            ]);
        $validation['member_id']=auth()->user()->id;
        $summary=Summary::create($validation);
   \Mail::to(auth()->user()->email)->send(
    new ApplicationCompletion($summary)
   );

         session()->flash('success', 'Hi '.auth()->user()->name.', Your application was successfully completed. An email notification has been sent to your email');

     return redirect('/congratulations/result');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function show(Summary $summary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function edit(Summary $summary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Summary $summary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Summary $summary)
    {
        //
    }
}
