<?php

namespace App\Http\Controllers;

use App\Sponser;
use Illuminate\Http\Request;

class SponserRefereeController extends Controller
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

        $rows = $request->input('rows');
foreach ($rows as $row)
{
    $records[] = [

        'member_id' => auth()->user()->id,
        'sponser' => $row['sponser'],
        'membership' => $row['membership'],
        'address' => $row['address'],
        'position' => $row['position'],
        'accepted_date' => $row['accepted_date'],
        'membership_number' => $row['membership_number'],
        'created_at' => now(),
        'updated_at' => now(),
    ];
}

sponser::insert($records);
session()->flash('success', 'Sponsors/Referee was successfully added');
return redirect('/membership/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function show(Sponser $sponser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponser $sponser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponser $sponser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponser $sponser)
    {
          $sponser->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();
    }
}
