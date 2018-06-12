@extends('layouts.admin')
@section('content')
<style>
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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
                <th>Non-taxable Income</th>
                <th>Taxable Income</th>
                <th>Tax (Monthly)</th>
                <th>Status</th>
                <th>Change Status</th>
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
                <td>{!! $transaction->status == 'pending' ? '<strong class="alert alert-danger">Pending</strong>':'<strong class="alert alert-success">Approved</strong>'!!}</td>
                <td>
                  <form>
                      <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span>
                        </label>
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