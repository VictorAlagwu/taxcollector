@extends('layouts.theme')

@section('content')
<style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
        
        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        
        .rtl table {
            text-align: right;
        }
        
        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
        </style>
    <!-- Page -->
<div class="container">
    <div class="row">   
        <div class="card mx-auto">
            <div class="card-header">   
                <strong>Apply for Tax Invoice</strong>
            </div>
        <div class="card-body card-block">
            <div class="page-invoice-table table-responsive">
                <div class="invoice-box">   
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="title">
                                            <h3>Tax Collector Invoice</h3>
                                        </td>
                                        <td>
                                            <strong>Date: {{date('d-m-Y')}}</strong>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <tr class="information">
                            <td colspan="3">
                                <table>
                                    <tr>
                                        <td>
                                            TaxManagement<br>
                                            Ozor Jerry<br>
                                            University of Nigeria, Nsukka
                                        </td>
                                        <td class="text-center">
                                            Invoice #: {{'#TAX'.$transaction->id}}<br>
                                            Payment: {{Carbon::parse($transaction->period)}}<br>
                                            Due: 7 Days after generating invoice
                                        </td>
                                        
                                        <td style="text-align:right;">
                                            <strong>Name:</strong> {{$transaction->user->name .' '. $transaction->user->lastname}}<br>
                                            <strong>Email:</strong> {{$transaction->user->email}}<br>
                                            <strong>Occupation:</strong> {{$transaction->user->occupation->name}}<br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <tr class="heading">
                            <td>
                                Gross Pay
                            </td>
                            <td>
                                Amount
                            </td>
                        </tr>
                        
                        <tr class="details">
                            <td>
                                Basic Income
                            </td>
                            <td>
                                ₦{{number_format($transaction->income).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                Housing Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->housing).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                Transport Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->transport).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                Utility Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->utility).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="details">
                            <td>
                                Entertainment Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->entertainment).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="details">
                            <td>
                                Children Allowance ({{$transaction->children_num}})
                            </td>
                            <td>
                                ₦{{number_format($transaction->children).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="details">
                            <td>
                                Dependant Allowance ({{$transaction->dependant_num}})
                            </td>
                            <td>
                                ₦{{number_format($transaction->dependant).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="heading">
                            <td>
                                
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->grosspay).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr class="heading">
                            <td>
                                Non-taxable Income(Freepay)
                            </td>
                            
                            <td>
                                Amount
                            </td>
                        </tr>
                        <tr class="item">
                            <td>
                                Consolidated Reliefs
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->pers).'.00'}}
                            </td>
                        </tr>
                        <tr class="item">
                            <td>
                                Pension (8% of Basic Income,Housing and Transport Allowance)
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->pension).'.00'}}
                            </td>
                        </tr>
                        
                        <tr class="item">
                            <td>
                                NHF (2.5% of Basic Income)
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->nhf).'.00'}}
                            </td>
                        </tr>

                        <tr class="heading">
                            <td>
                                
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->freepay).'.00'}}
                            </td>
                        </tr>
                        <tr class="item last">
                            <td>
                                Taxable Income (Gross Income - Free Pay)
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->taxable).'.00'}}
                            </td>
                        </tr>
                        
                        <tr class="total">
                            <td></td>
                            
                            <td>
                                Tax (Monthly): ₦{{number_format($transaction->taxable/$transaction->user->occupation->taxrate)}}.00
                            </td>
                        </tr>
                    </table>
                    <hr>
              
                    <div class="text-right">
                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            
                                    <input type="hidden" name="email" value="{{$transaction->user->email}}"> {{-- required --}}
                                    <input type="hidden" name="orderID" value="{{'#TAX'.$transaction->id}}">
                                    <input type="hidden" name="amount" value="{{($transaction->taxable/$transaction->user->occupation->taxrate)*100}}"> {{-- required in kobo --}}
                                    <input type="hidden" name="quantity" value="1">
                                    
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                        
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                        
                        
                                    <p>
                                        
                                    </p>
                                   @if($transaction->status == 'pending')
                                    <button class="btn btn-animate btn-animate-side btn-success" type="submit" value="Pay Now!">
                                        <span><i class="fa fa-plus-circle"></i> Pay Now!</span>
                                    </button>
                                   @endif
                                    <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                                                 onclick="javascript:window.print();">
                                    <span><i class="fa fa-print" aria-hidden="true"></i> Print</span>
                                    </button>
                                </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection