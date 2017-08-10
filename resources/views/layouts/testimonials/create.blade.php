@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 align="center">Add Testimonial</h2></div>
                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('createtestimonial') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                <label for="designation" class="col-md-4 control-label">Designation</label>

                                <div class="col-md-6">
                                    <input id="designation" type="text" class="form-control" name="designation"
                                           value="{{ old('designation') }}" required autofocus>
                                    @if ($errors->has('designation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                <label for="company" class="col-md-4 control-label">Company</label>

                                <div class="col-md-6">
                                    <input id="company" type="text" class="form-control" name="company"
                                           value="{{ old('company') }}" required autofocus>
                                    @if ($errors->has('company'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('testimonial') ? ' has-error' : '' }}">
                                <label for="testimonial" class="col-md-4 control-label">Testimonial</label>

                                <div class="col-md-6">
                                    <textarea name="testimonial" id="testimonial" cols="30" rows="5" class="form-control" required autofocus>{{ old('testimonial') }}</textarea>
                                    @if ($errors->has('testimonial'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('testimonial') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="col-md-4 control-label">Image</label>

                                <div class="col-md-6">
                                    <input id="image" name="image" class="form-control" type="file">
                                    {{--<input id="image" type="text" class="form-control" name="image"--}}
                                    {{--value="{{ old('image') }}" required autofocus>--}}
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Testimonial
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection