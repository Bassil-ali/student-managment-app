<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::resource('fathers','FathersController')->middleware('auth');
Route::resource('students','StudentController')->middleware('auth');
Route::resource('sheets','SheetController')->middleware('auth');
Route::resource('results','ResultController')->middleware('auth');
Route::resource('library','LibraryController')->middleware('auth');
Route::resource('spreed','SpreedController')->middleware('auth');



Route::get('index','IndextController@index');
Route::post('degree','IndextController@getresult');

