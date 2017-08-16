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
        $filenames = "";
        foreach ($request->images as $image) {
            $filenames .= $image->store('public/properties') . ',';
        }

        $property = Property::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'price' => (int) request('price'),
            'status' => request('status'),
            'type' => request('type'),
            'address' => request('address'),
            'state' => request('state'),
            'city' => request('city'),
            'postcode' => request('postcode'),
            'description' => request('description'),
            'fulldescription' => base64_encode(request('fulldescription')),
            'area' => (int) request('area'),
            'bedroom' => (int) request('bedroom'),
            'kitchen' => (int) request('kitchen'),
            'bathroom' => (int) request('bathroom'),
            'dinningroom' => (int) request('dinningroom'),
            'drawingroom' => (int) request('drawingroom'),
            'garage' => (int) request('garage'),
            'swimmingpool' => (int) $request->input('swimmingpool'),
            'gym' => (int) $request->input('gym'),
            'firesafety' => (int) $request->input('firesafety'),
            'garden' => (int) $request->input('garden'),
            'guesthouse' => (int) $request->input('guesthouse'),
            'centralheating' => (int) $request->input('centralheating'),
            'phone' => request('phone'),
            'name' => request('name'),
            'email' => request('email'),
            'images' => $filenames
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
        $imageArray = explode(",", $property->images);
        return view('properties.show', compact('property','imageArray'));
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
