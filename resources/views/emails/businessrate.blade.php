@component('mail::message')
# You got new message at {{ config('app.name') }}.

<h4>Name :</h4><p>{{$user->name}}</p>
<h4>Email :</h4><p>{{$user->email}}</p>
<h4>Phone :</h4><p>{{$user->phone}}</p>
<h4>Business Address :</h4><p>{{$user->baddress}}</p>
<h4>PostCode :</h4><p>{{$user->postcode}}</p>
<h4>Annual Rate &pound; :</h4><p>{{$user->annualrate}}</p>
<h4>Rate Bill 2017/2018 :</h4><p>{{$user->ratebill}}</p>
<h4>Message :</h4><p>{{$user->message}}</p>

@endcomponent
