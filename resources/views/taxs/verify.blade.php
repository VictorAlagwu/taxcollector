<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tax Invoice</title>
    
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
</head>
<body>
    <div class="invoice-box">   
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: 123<br>
                                Created: January 1, 2015<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                TaxCollector MGT<br>
                            </td>
                            
                            <td>
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
                    Earned Income
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
                   Gross Income
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
                   Occupation
                </td>
                
                <td>
                    {{$transaction->user->occupation->name}}
                </td>
            </tr>
            <tr class="item">
                <td>
                   Earned Income
                </td>
                
                <td>
                    {{$transaction->user->occupation->taxrate}}%
                </td>
            </tr>
            <tr class="item">
                <td>
                   Tax Rate
                </td>
                
                <td>
                    {{$transaction->user->occupation->taxrate}}%
                </td>
            </tr>
            
            
            <tr class="item">
                <td>
                    Income Per Annum
                </td>
                
                <td>
                  
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Tax Payment
                </td>
                
                <td>
                    {{number_format(($transaction->user->occupation->taxrate/100) * $transaction->user->income)}}
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: ${{number_format(($transaction->user->occupation->taxrate/100) * $transaction->user->income)}}.00
                </td>
            </tr>
        </table>
    </div>
</body>
</html>