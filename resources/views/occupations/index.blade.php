@extends('layouts.admin')

@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h3>Create Occupation</h3>
            <div class="panel panel-default">
                <hr>
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
        <div class="col-md-6 col-md-offset-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Occupation Name</th>
                        <th scope="col">Occupation Tax Rate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($occupations as $occupation)
                        <tr>
                            <td scope="row"s>{{$occupation->id}}</td>
                            <td>{{$occupation->name}}</td>
                            <td>{{$occupation->taxrate}}</td>
                            <td>
                                <a href="{{route('occupations/edit/', $occupation->id)}}">
                                    <span><i class="fa fa-edit"></i>Edit</span>
                                </a>
                                <form method="POST" action="{{route('occupations/delete/', $occupation->id)}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" status="pending"/>
                                    <button type="submit" class="btn btn-danger">
                                    <span><i class="fa fa-times"></i>Delete</span>
                                    </button>
                                  </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection