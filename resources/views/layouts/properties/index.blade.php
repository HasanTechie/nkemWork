@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 align="center">View Properties</h2></div>
                    <div class="panel-body">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Property Title</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Link</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td>{{$property->id}}</td>
                                    <td>{{$property->title}}</td>
                                    <td>{{$property->name}}</td>
                                    <td>{{$property->email}}</td>
                                    <td>{{$property->phone}}</td>
                                    <td><a href="{{config('app.url').'/'.strtolower($property->type).'-properties/'.$property->id}}" target="_blank"><button type="button" class="btn btn-success">View Property</button></a></td>
                                    <td>
                                        <a href="/allproperties/{{$property->id}}/edit"><i style="color:green"
                                                                                           class="fa fa-pencil-square-o fa-2x"
                                                                                           aria-hidden="true"></i></a>
                                    </td>
                                    <td>
                                        <form action="/allproperties/{{ $property->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button style="color:red" class="fa fa-times fa-lg"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection