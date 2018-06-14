@extends('layouts.theme')

@section('content')
       <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    
                    <h3 class="mb-0">
                        <span class="count">{{$transactions->count()}}</span>
                    </h3>
                    <p class="text-light"><strong>Invoices Generated</strong></p>

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
                    
                    <h3 class="mb-0">
                        <span class="count">{{$approvedTax->count()}}</span>
                    </h3>
                    <p class="text-light"><strong>Paid Invoice(s)</strong></p>

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
                    
                    <h3 class="mb-0">
                        <span class="count">{{$pendingTax->count()}}</span>
                    </h3>
                    <p class="text-light"><strong>Non-Paid Taxes</strong></p>

                </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
            </div>
        </div>
        <!--/.col-->

         

@endsection
