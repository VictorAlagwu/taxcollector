@extends('layouts.admin')

@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <h3><a href="{{url('occupations/create')}}">Create Occupation</a></h3>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Occupation Name</th>
                        <th scope="col">Occupation Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($occupations as $occupation)
                        <tr>
                            <td scope="row"s>{{$occupation->id}}</td>
                            <td>{{$occupation->name}}</td>
                            <td>{{$occupation->taxrate}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection