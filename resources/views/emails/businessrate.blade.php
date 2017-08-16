@component('mail::message')
# You got new message at {{ config('app.name') }}.

<h4>Name :</h4><p>{{$user->name}}</p>
<h4>Email :</h4><p>{{$user->email}}</p>
<h4>Phone :</h4><p>{{$user->phone}}</p>
<h4>Company :</h4><p>{{$user->company}}</p>
<h4>PostCode :</h4><p>{{$user->postcode}}</p>
<h4>RateableValue :</h4><p>{{$user->rateablevalue}}</p>
<h4>Message :</h4><p>{{$user->message}}</p>

@endcomponent
