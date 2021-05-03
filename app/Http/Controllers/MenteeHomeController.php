<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class MenteeHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:mentee');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mentee.dashboard');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function show(Mentee $mentee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentee $mentee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentee $mentee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentee $mentee)
    {
        //
    }
}
