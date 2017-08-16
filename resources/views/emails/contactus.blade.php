@component('mail::message')
# You got new message at {{ config('app.name') }}.

<h4>Name :</h4><p>{{$user->name}}</p>
<h4>Email :</h4><p>{{$user->email}}</p>
<h4>Phone :</h4><p>{{$user->phone}}</p>
<h4>Message :</h4><p>{{$user->message}}</p>

@endcomponent
