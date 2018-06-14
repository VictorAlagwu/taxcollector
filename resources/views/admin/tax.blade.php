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
                <th>Invoice Num</th>
                <th>Name</th>
                <th>Occupation</th>
                <th>Gross Pay</th>
                <th>Non-taxable Income</th>
                <th>Taxable Income</th>
                <th>Tax (Monthly)</th>
                <th>Current Status</th>
                <th>Change Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
              <tr>
              <td><a href="{{route('tax/verify', ['id'=>$transaction->id])}}">{{'#TAX'. $transaction->id}}</a></td>
                <td>{{$transaction->user->name.' '.$transaction->user->lastname}}</td>
                <td>{{$transaction->user->occupation->name}}</td>
                <td>₦{{number_format($transaction->grosspay).'.00'}}</td>

                <td>₦{{number_format($transaction->freepay).'.00'}}</td>
                <td>₦{{number_format($transaction->taxable).'.00'}}</td>
                <td>₦{{number_format($transaction->taxable/$transaction->user->occupation->taxrate)}}.00</td>
                <td>{!! $transaction->status == 'pending' ? '<strong class="alert alert-danger">Pending</strong>':'<strong class="alert alert-success">Approved</strong>'!!}</td>
                <td>
                  <form method="POST" action="{{route('admin/tax/approve/', $transaction->id)}}">
                    {{ csrf_field() }}
                    <input type="hidden" status="approved"/>
                    <button type="submit" class="btn btn-success">
                    <span><i class="fa fa-check"></i>Approve</span>
                    </button>
                  </form>
                  <form method="POST" action="{{route('admin/tax/reject/', $transaction->id)}}">
                    {{ csrf_field() }}
                    <input type="hidden" status="pending"/>
                    <button type="submit" class="btn btn-danger">
                    <span><i class="fa fa-times"></i>Pending</span>
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


        </div>
    </div><!-- .animated -->

@endsection
