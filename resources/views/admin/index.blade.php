@extends('layouts.admin')
@section('content')

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            
            <h4 class="mb-0">
                <span class="count">{{$users->count()}}</span>
            </h4>
            <p class="text-light">Registered Users</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-2">
        <div class="card-body pb-0">
            
            <h4 class="mb-0">
                <span class="count">{{$transactions->count()}}</span>
            </h4>
            <p class="text-light">Number of Tax Invoices Generated</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            
            <h4 class="mb-0">
                <span class="count">{{$approvedTax->count()}}</span>
            </h4>
            <p class="text-light">Number of Tax Paid (Approved)</p>

        </div>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
    </div>
</div>
<!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body pb-0">
                    <h4 class="mb-0">
                        <span class="count">{{$pendingTax->count()}}</span>
                    </h4>
                    <p class="text-light">Number of Taxs not yet paid (Pending)</p>

                    <div class="chart-wrapper px-3" style="height:70px;" height="70">
                        <canvas id="widgetChart4"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">{{$occupations->count()}}</span>
                        </h4>
                        <p class="text-light">Occupations Registered</p>
    
                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>
    
                    </div>
                </div>
            </div>
            <!--/.col-->


         

@endsection
