<?php

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

Route::get('/', function () {   return view('index');   });
Route::get('/aboutus', function () {   return view('aboutus');   });
Route::get('/contactus', function () {   return view('contactus');   });
Route::post('/contactus', function () {   return view('contactus');   });
Route::get('/property', function () {   return view('property');   });
Route::get('/properties', function () {   return view('properties');   });
Route::post('/properties', function () {   return view('properties');   });
Route::get('/agent', function () {   return view('agent');   });
Route::get('/agents', function () {   return view('agents');   });
Route::post('/agents', function () {   return view('agents');   });
Route::get('/addproperty', function () {   return view('addproperty');   });
