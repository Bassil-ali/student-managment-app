<?php

namespace App\Http\Controllers;

use App\Library;
use App\Spreed;
use Illuminate\Http\Request;

use App\Fathers;
use App\student;
use App\sheet;
use App\result;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fathers  = Fathers::count();
        $students = student::count();
        $results = result::count();
        $sheets = sheet::count();
        $spreeds = Spreed::all();
        $librarys=    Library::all();


        return view('/',compact('results','students','fathers','sheets','spreeds','librarys'));
    }
}
