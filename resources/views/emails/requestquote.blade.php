@component('mail::message')
# A User have requested quote for a property at {{config('app.name')}}

<h4>Name :</h4><p>{{$user->name}}</p>
<h4>Email :</h4><p>{{$user->email}}</p>
<h4>Requesting Quote for Property :</h4><p><a href="{{config('app.url').'/properties/'.$user->propertyid}}">{{$user->propertytitle}}</a></p>
<h4>Message :</h4><p>{{$user->message}}</p>

@endcomponent
