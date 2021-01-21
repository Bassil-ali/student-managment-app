<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= student::get();
        return view('students' ,compact('students'));
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
      //  dd($request->all());
        $request->validate([
            'name' => 'required',
            'namber' => 'required',

        ]);
//        $image = $request->file('image');
//        $file_name = $image->getClientOriginalName();

       // move(public_path('Attachments/'. $request->namber), $file_name);

        student::create($request->all());
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
    public function update(Request $request, s $s)
    {
        //  dd($request->all());
        $request->validate([
            'name' => 'required',
            'namber' => 'required',

        ]);
//        $image = $request->file('image');
//        $file_name = $image->getClientOriginalName();

        // move(public_path('Attachments/'. $request->namber), $file_name);
        $student = student::findOrFail($request->id);
        $student->update($request->all());
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
