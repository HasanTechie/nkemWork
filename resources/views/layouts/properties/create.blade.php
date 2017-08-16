@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 align="center">Add Property</h2></div>
                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('createproperty') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="title"
                                           value="{{ old('title') }}" required autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                <label for="status" class="col-md-4 control-label">Status</label>

                                <div class="col-md-6">
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Rent">Rent</option>
                                        <option value="Sell">Sell</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Type</label>

                                <div class="col-md-6">
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="Commercial">Commercial</option>
                                        <option value="Residential">Residential</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Price in &pound;</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="price"
                                           value="{{ old('price') }}" required autofocus>
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                                <label for="area" class="col-md-4 control-label">Area in sq meters</label>

                                <div class="col-md-6">
                                    <input id="area" type="number" class="form-control" name="area"
                                           value="{{ old('area') }}" required autofocus>
                                    @if ($errors->has('area'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address"
                                           value="{{ old('address') }}" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                <label for="state" class="col-md-4 control-label">State</label>

                                <div class="col-md-6">
                                    <input id="state" type="text" class="form-control" name="state"
                                           value="{{ old('state') }}" required autofocus>
                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="city" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city"
                                           value="{{ old('city') }}" required autofocus>
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                <label for="postcode" class="col-md-4 control-label">PostCode</label>

                                <div class="col-md-6">
                                    <input id="postcode" type="text" class="form-control" name="postcode"
                                           value="{{ old('postcode') }}" required autofocus>
                                    @if ($errors->has('postcode'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea name="description" id="description" cols="30" rows="10"
                                              class="form-control">{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('bedroom') ? ' has-error' : '' }}">
                                <label for="bedroom" class="col-md-4 control-label">Bedroom</label>

                                <div class="col-md-6">
                                    <input id="bedroom" type="number" class="form-control" name="bedroom"
                                           value="{{ old('bedroom') }}" required autofocus>
                                    @if ($errors->has('bedroom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bedroom') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('kitchen') ? ' has-error' : '' }}">
                                <label for="kitchen" class="col-md-4 control-label">Kitchen</label>

                                <div class="col-md-6">
                                    <input id="kitchen" type="number" class="form-control" name="kitchen"
                                           value="{{ old('kitchen') }}" required autofocus>
                                    @if ($errors->has('kitchen'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kitchen') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('bathroom') ? ' has-error' : '' }}">
                                <label for="bathroom" class="col-md-4 control-label">Bathroom</label>

                                <div class="col-md-6">
                                    <input id="bathroom" type="number" class="form-control" name="bathroom"
                                           value="{{ old('bathroom') }}" required autofocus>
                                    @if ($errors->has('bathroom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bathroom') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dinningroom') ? ' has-error' : '' }}">
                                <label for="dinningroom" class="col-md-4 control-label">Dinning Room</label>

                                <div class="col-md-6">
                                    <input id="dinningroom" type="number" class="form-control" name="dinningroom"
                                           value="{{ old('dinningroom') }}" required autofocus>
                                    @if ($errors->has('dinningroom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dinningroom') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('drawingroom') ? ' has-error' : '' }}">
                                <label for="drawingroom" class="col-md-4 control-label">Drawing Room</label>

                                <div class="col-md-6">
                                    <input id="drawingroom" type="number" class="form-control" name="drawingroom"
                                           value="{{ old('drawingroom') }}" required autofocus>
                                    @if ($errors->has('drawingroom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('drawingroom') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('garage') ? ' has-error' : '' }}">
                                <label for="garage" class="col-md-4 control-label">Garage</label>

                                <div class="col-md-6">
                                    <input id="garage" type="number" class="form-control" name="garage"
                                           value="{{ old('garage') }}" required autofocus>
                                    @if ($errors->has('garage'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('garage') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="checkboxes" class="col-md-4 control-label">&nbsp;</label>
                                <div class="col-md-6">
                                    <input type="checkbox" name="swimmingpool" id="swimmingpool" value="1">Swimming
                                    Pool <br>
                                    <input type="checkbox" name="gym" id="gym" value="1">Gym <br>
                                    <input type="checkbox" name="firesafety" id="firesafety" value="1">Fire
                                    Safety <br>
                                    <input type="checkbox" name="garden" id="garden" value="1">Garden <br>
                                    <input type="checkbox" name="guesthouse" id="guesthouse" value="1">Guest
                                    House <br>
                                    <input type="checkbox" name="centralheating" id="centralheating"
                                           value="1">Central Heating <br>
                                </div>
                            </div>


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

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                           value="{{ old('phone') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="col-md-4 control-label">Images of House</label>

                                <div class="col-md-6">
                                    <input id="images" name="images[]" class="form-control" type="file" multiple>
                                    {{--<input id="image" type="text" class="form-control" name="image"--}}
                                    {{--value="{{ old('image') }}" required autofocus>--}}
                                    @if ($errors->has('images'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('images') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Property
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