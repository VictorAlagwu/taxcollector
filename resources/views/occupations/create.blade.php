@extends('layouts.admin')

@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Occupation</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('occupations')}}">
                        {{ csrf_field() }}

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="name" class="form-control-label">Occupation Name</label>
                            </div>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            <br>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="taxrate" class="form-control-label">Tax Rate</label>
                            </div>
                            <div class="col-md-9">
                                <input id="taxrate" type="number" class="form-control" name="taxrate" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Occupation
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