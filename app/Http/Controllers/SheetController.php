<?php

namespace App\Http\Controllers;

use App\sheet;
use Illuminate\Http\Request;

class SheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sheets= sheet::get();
        return view('sheets',compact('sheets'));
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
        sheet::create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\s  $s
     * @return \Illuminate\Http\Response
     */
    public function show(s $s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\s  $s
     * @return \Illuminate\Http\Response
     */
    public function edit(s $s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\s  $s
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sheets = sheet::findOrFail($request->id);
        $sheets->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\s  $s
     * @return \Illuminate\Http\Response
     */
    public function destroy(s $s)
    {
        //
    }
}
