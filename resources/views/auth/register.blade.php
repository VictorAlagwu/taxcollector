@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="lastname" class="col-md-4 control-label">Last Name</label>
    
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
    
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            @include('partials.country')
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="gridCheck1">Gender</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input " type="checkbox" name="gender" value="male" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="gender" value="female" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="address"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="occupation_id" class="col-md-4 control-label">Occupation</label>
                            <div class="col-md-6">
                                <select name="occupation_id" class="form-control">
                                    @foreach($occupations as $occupation)
                                        <option value="{{$occupation->id}}">{{$occupation->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group">
                                <label for="marital_status" class="col-md-4 control-label">Martial Status</label>
                                <div class="col-md-6">
                                    <select name="marital_status" class="form-control">
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="none">Can not tell</option>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
