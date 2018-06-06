@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Apply for Tax Invoice</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('transaction/create')}}">
                        {{ csrf_field() }}
                    
                        <div class="form-group">
                            <label for="income" class="col-md-4 control-label">Basic Income</label>

                            <div class="col-md-6">
                                <input id="income" type="number" class="form-control" name="income" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('transport') ? ' has-error' : '' }}">
                            <label for="transport" class="col-md-4 control-label">Transport Allowance</label>

                            <div class="col-md-6">
                                <input id="transport" type="number" class="form-control" name="transport">
                                @if ($errors->has('transport'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transport') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('housing') ? ' has-error' : '' }}">
                            <label for="housing" class="col-md-4 control-label">Housing Allowance</label>

                            <div class="col-md-6">
                                <input id="housing" type="number" class="form-control" name="housing">
                                @if ($errors->has('housing'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('housing') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('utility') ? ' has-error' : '' }}">
                            <label for="utility" class="col-md-4 control-label">Utility Allowance</label>

                            <div class="col-md-6">
                                <input id="utility" type="number" class="form-control" name="utility">
                                @if ($errors->has('utility'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('utility') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('entertainment') ? ' has-error' : '' }}">
                            <label for="entertainment" class="col-md-4 control-label">Entertainment Allowance</label>

                            <div class="col-md-6">
                                <input id="entertainment" type="number" class="form-control" name="entertainment">
                                @if ($errors->has('entertainment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('entertainment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(Auth::user()->marital_status == "married")
                        <div class="form-group{{ $errors->has('children_num') ? ' has-error' : '' }}">
                            <label for="children_num" class="col-md-4 control-label">No of Children</label>

                            <div class="col-md-6">
                                <input id="children_num" type="number" class="form-control" name="children_num">
                                @if ($errors->has('children_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('children_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="children" class="col-md-4 control-label">Children Allowance</label>

                            <div class="col-md-6">
                                <input id="children" type="number" class="form-control" name="children">
                            </div>
                        </div>
                        @endif
                        <div class="form-group{{ $errors->has('dependant_num') ? ' has-error' : '' }}">
                            <label for="dependant_num" class="col-md-4 control-label">No of Dependant(s)</label>

                            <div class="col-md-6">
                                <input id="dependant_num" type="number" class="form-control" name="dependant_num">
                                @if ($errors->has('dependant_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dependant_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dependant" class="col-md-4 control-label">Dependant(s) Allowance</label>

                            <div class="col-md-6">
                                <input id="dependant" type="number" class="form-control" name="dependant">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Apply
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