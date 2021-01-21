<?php

namespace App\Http\Controllers;

use App\Spreed;
use Illuminate\Http\Request;

class SpreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spreeds = Spreed::all();

        return view('spreed', compact('spreeds'));

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

        Spreed::create($request->all());
        $spreeds = Spreed::all();
        return view('spreed',compact('spreeds'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spreed  $spreed
     * @return \Illuminate\Http\Response
     */
    public function show(Spreed $spreed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spreed  $spreed
     * @return \Illuminate\Http\Response
     */
    public function edit(Spreed $spreed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spreed  $spreed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spreed $spreed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spreed  $spreed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spreed $spreed)
    {
        //
    }
}
