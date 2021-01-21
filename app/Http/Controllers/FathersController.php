<?php

namespace App\Http\Controllers;

use App\Fathers;
use App\User;

use App\student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FathersController extends Controller
{
    public function index()
    {
 $users = User::all();
 $students = student::all();
        return view('fathers', compact('users','students'));
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
            'email' => 'required',
            'password' => 'required',

        ]);

        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'student_nam'=>$request['student_nam'],
            'phone'=>$request['phone'],
            'sex'=>$request['sex'],
            'adress'=>$request['adress'],
            'work'=>$request['work'],
            'grap'=>$request['grap'],
            'cash_i'=>$request['cash_i'],
            'cash'=>$request['cash'],
            'password'=>Hash::make($request['password']),

        ]);
        $users = User::all();
        $students = student::all();
        return view('fathers',compact('users','students'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $users = User::findOrFail($request->id);

        $users->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'student_nam'=>$request['student_nam'],
            'phone'=>$request['phone'],
            'sex'=>$request['sex'],
            'adress'=>$request['adress'],
            'cash_i'=>$request['cash_i'],
            'cash'=>$request['cash'],
            'password'=>Hash::make($request['password']),

        ]);
        $users = User::all();
        $students = student::all();
        return view('fathers',compact('users','students'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
