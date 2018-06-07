<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use PDF;

class PdfGenerateController extends Controller
{
    
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInvoice(Request $request)
    {
        $user = Transaction::where('id', auth()->id())->get()->first();
        view()->share('user',$user);

        if($request->has('download')) {
        	// pass view file
            $pdf = PDF::loadView('invoice.invoice');
            // download pdf
            return $pdf->download('taxinvoice.pdf');
        }
       
        return view('invoice.invoice');
    }

}
