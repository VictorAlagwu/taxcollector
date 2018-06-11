@extends('layouts.theme')
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
                <th>Invoice Num</th>
                <th>Name</th>
                <th>Occupation</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Marital Status</th>
                <th>Gross Pay</th>
                <th>Untaxable Income</th>
                <th>Taxable Income</th>
                <th>Tax (Monthly)</th>
              </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
              <tr>
              <td><a href="{{route('tax/verify', ['id'=>$transaction->id])}}">{{'#TAX'. $transaction->id}}</a></td>
                <td>{{$transaction->user->name.' '.$transaction->user->lastname}}</td>
                <td>{{$transaction->user->occupation->name}}</td>
                <td>{{$transaction->user->country}}</td>
                <td>{{$transaction->user->gender}}</td>
                <td>{{$transaction->user->marital_status}}</td>
                <td>₦{{number_format($transaction->grosspay).'.00'}}</td>

                <td>₦{{number_format($transaction->freepay).'.00'}}</td>
                <td>₦{{number_format($transaction->taxable).'.00'}}</td>
                <td>₦{{number_format($transaction->taxable/$transaction->user->occupation->taxrate)}}.00</td>
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