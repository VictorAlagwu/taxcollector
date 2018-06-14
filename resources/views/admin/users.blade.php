@extends('layouts.admin')
@section('content')

<div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Occupation</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Marital Status</th>
               
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name.' '.$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->occupation->name}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->marital_status}}</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->

@endsection
