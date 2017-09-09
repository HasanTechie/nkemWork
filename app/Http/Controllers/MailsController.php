<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Mail\RequestQuote;
use App\Mail\BusinessRate;
use Illuminate\Http\Request;

class MailsController extends Controller
{
    //
    public function contactus(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'message'=> 'required'
        ]);

        $user = $request;

        \Mail::to(['email'=> env('APP_EMAIL')])->send(new ContactUs($user));

        session()->flash('message', 'Thanks for contacting '.config('app.name').', we will reply to you as soon as possible.');
        return back();

    }

    public function requestquote(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required',
            'propertyid'=> 'required',
            'message'=> 'required'
        ]);

        $user = $request;

        \Mail::to(['email'=> env('APP_EMAIL')])->send(new RequestQuote($user));

        session()->flash('message', 'Thanks for contacting '.config('app.name').', we will reply to you as soon as possible.');
        return back();

    }

    public function businessrate(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'baddress'=> 'required',
            'postcode'=> 'required',
            'annualrate'=> 'required',
            'ratebill'=> 'required',
            'message'=> 'required'
        ]);

        $user = $request;

        \Mail::to(['email'=> env('APP_EMAIL')])->send(new BusinessRate($user));

        session()->flash('message', 'Thanks for contacting '.config('app.name').', we will reply to you as soon as possible.');
        return back();

    }
}
