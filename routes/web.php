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

Route::get('/properties', 'PropertiesController@index');
Route::post('/properties', 'PropertiesController@index');

Route::get('/properties/{property}', 'PropertiesController@show');

Route::get('/agent', function () {   return view('agent');   });

Route::get('/agents', function () {   return view('agents');   });
Route::post('/agents', function () {   return view('agents');   });

Route::get('/addproperty', function () {   return view('addproperty');   });
