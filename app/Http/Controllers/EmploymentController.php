<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Http\Request;

class EmploymentController extends Controller
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
        'organisation' => $row['organisation'],
        'position' => $row['position'],
        'date' => $row['date'],
        'responsibility' => $row['responsibility'],
        'created_at' => now(),
        'updated_at' => now(),
    ];
}

Employment::insert($records);
session()->flash('success', 'Employment History was successfully added');
return redirect('/membership/referee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show(Employment $employment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employment $employment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employment $employment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employment $employment)
    {
        $employment->delete();
        session()->flash('success', 'A record was successfully deleted added');
return back();

    }
}
