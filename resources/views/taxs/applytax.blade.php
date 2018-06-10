@extends('layouts.theme')
@section('content')
    <!-- Page -->
<div class="container">
    <div class="row">   
        <div class="card mx-auto" style="width: 40rem;">
            <div class="card-header">    
                <strong>Apply for Tax Invoice</strong>
            </div>
            <div class="card-body card-block">
                <form class="form-horizontal" method="POST" action="tax/create">
                    {{ csrf_field() }}
                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="income" class="form-control-label">Basic Income</label></div>
                        <div class="col-12 col-md-9">
                            <input id="income" type="number" class="form-control"  name="income" required>
                        </div>
                    </div>
                    <div class="row form-group{{ $errors->has('transport') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="transport" class="control-label">Transport Allowance</label></div>

                        <div class="col-12 col-md-9">
                            <input id="transport" type="number" class="form-control"  name="transport">
                            @if ($errors->has('transport'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('transport') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('housing') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="housing" class="control-label">Housing Allowance</label></div>
                        <div class="col-12 col-md-9">
                            <input id="housing" type="number" class="form-control"  name="housing">
                            @if ($errors->has('housing'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('housing') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('utility') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="utility" class="control-label">Utility Allowance</label></div>

                        <div class="col-12 col-md-9">
                            <input id="utility" type="number" class="form-control"  name="utility">
                            @if ($errors->has('utility'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('utility') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('entertainment') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="entertainment" class="control-label">Entertainment Allowance</label></div>

                        <div class="col-12 col-md-9">
                            <input id="entertainment" type="number" class="form-control"  name="entertainment">
                            @if ($errors->has('entertainment'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('entertainment') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    @if(Auth::user()->marital_status == "married")

                    <div class="row form-group{{ $errors->has('children_num') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="children_num" class="control-label">No of Children</label></div>

                        <div class="col-12 col-md-9">
                            <input id="children_num" type="number" class="form-control"   name="children_num">
                            @if ($errors->has('children_num'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('children_num') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="children" class="control-label">Children Allowance</label></div>

                        <div class="col-12 col-md-9">
                            <input id="children" type="number" class="form-control" name="children">
                        </div>
                    </div>
                    @endif
                    <div class="row form-group{{ $errors->has('dependant_num') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="dependant_num" class="control-label">No of Dependant(s)</label></div>

                        <div class="col-12 col-md-9">
                            <input id="dependant_num" type="number" class="form-control" name="dependant_num">
                            @if ($errors->has('dependant_num'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dependant_num') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="dependant" class="control-label">Dependant(s) Allowance</label></div>

                        <div class="col-12 col-md-9">
                            <input id="dependant" type="number" class="form-control" name="dependant">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="mx-auto">
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

        


                            
                        
    <!-- End Page -->
@endsection

