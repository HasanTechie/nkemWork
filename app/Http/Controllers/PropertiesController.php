<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properties = Property::latest()->get();

        return view('properties.index', compact('properties'));
    }

    public function all(){

        $properties = Property::latest()->get();

        return view('layouts.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $property = Property::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'price' => (int) request('price'),
            'status' => 'sale',
            'type' => 'commercial',
            'address' => 'test',
            'postcode' => 'test',
            'description' => 'test',
            'area' => (int) '1',
            'bedroom' => (int) '1',
            'kitchen' => (int) '1',
            'bathroom' => (int) '1',
            'dinningroom' => (int) '1',
            'drawingroom' => (int) '1',
            'garage' => (int) '1',
            'swimmingpool' => (int) '1',
            'gym' => (int) '1',
            'firesafety' => (int) '1',
            'garden' => (int) '1',
            'guesthouse' => (int) '1',
            'centralheating' => (int) '1',
            'phone' => (int) '1',
            'name' => 'test',
            'email' => 'test@test.com',
            'city' => request('city'),
            'state' => request('state'),
            'images' => request('image'),
        ]);

        if ($property->exists) {
            session()->flash('message', 'Property created Successfully');
        }

//        return redirect($thread->path());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
        return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
        $property->delete();
        if (!($property->exists)) {
            session()->flash('message', 'Property Deleted Successfully');
        }
        return back();
    }
}
