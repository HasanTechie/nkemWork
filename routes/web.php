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

Route::get('/', 'IndexController@index' );
Route::get('/aboutus', function () {   return view('aboutus');   });

Route::get('/contactus', function () {   return view('contactus');   });

Route::post('/contactus', 'MailsController@contactus');
Route::post('/requestquote', 'MailsController@requestquote');

Route::get('/businessrates', function () {   return view('businessrates');   });
Route::post('/businessrates', function () {   return view('businessrates');   });

Route::get('/properties', 'PropertiesController@index');
Route::post('/properties', 'PropertiesController@index');
Route::get('/properties/{property}', 'PropertiesController@show');

Route::get('/testimonials', 'TestimonialsController@index');

Route::get('/createproperty', 'PropertiesController@create')->name('createproperty');
Route::post('/createproperty', 'PropertiesController@store')->name('createproperty');
Route::get('/allproperties', 'PropertiesController@all')->name('allproperties');
Route::delete('/allproperties/{property}', 'PropertiesController@destroy');

Route::get('/createtestimonial', 'TestimonialsController@create')->name('createtestimonial');
Route::post('/createtestimonial', 'TestimonialsController@store')->name('createtestimonial');
Route::get('/alltestimonials', 'TestimonialsController@all')->name('alltestimonials');
Route::delete('/alltestimonials/{testimonial}', 'TestimonialsController@destroy');



Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/register', 'AdminController@index')->name('admin');
