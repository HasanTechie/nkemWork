<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonials = Testimonial::latest()->get();

        return view('testimonials', compact('testimonials'));
    }

    public function all()
    {
        //
        $testimonials = Testimonial::latest()->get();

        return view('layouts.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $filename = $request->image->store('public/testimonials');
        $testimonial = Testimonial::create([
            'user_id' => auth()->id(),
            'name' => request('name'),
            'designation' => request('designation'),
            'company' => request('company'),
            'testimonial' => request('testimonial'),
            'media' => $filename,
        ]);

        if ($testimonial->exists) {
            session()->flash('message', 'Testimonial created Successfully');
        }

//        return redirect($thread->path());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view('layouts.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
        $testimonial->update([
            'name' => request('name'),
            'designation' => request('designation'),
            'company' => request('company'),
            'testimonial' => request('testimonial')
        ]);
        session()->flash('message', 'Testimonials Details Updated Successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $testimonial->delete();
        if (!($testimonial->exists)) {
            session()->flash('message', 'Testimonial Deleted Successfully');
        }
        return back();
    }
}
