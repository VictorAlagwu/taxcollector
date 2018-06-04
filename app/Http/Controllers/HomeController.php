<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Occupation;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function applyTax()
    {
        return view('invoice.apply');
    }

    public function getInvoice(Request $request)
    {
        $user = User::where('id', auth()->id())->get()->first();
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
