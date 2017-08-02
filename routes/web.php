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

Route::get('/businessrates', function () {   return view('businessrates');   });
Route::post('/businessrates', function () {   return view('businessrates');   });

Route::get('/properties', 'PropertiesController@index');
Route::post('/properties', 'PropertiesController@index');

Route::get('/properties/{property}', 'PropertiesController@show');

Route::get('/testimonials', 'TestimonialsController@index');

Route::get('/addproperty', function () {   return view('addproperty');   });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
