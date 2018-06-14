<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Occupation;
use App\Transaction;

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
        $id  = auth()->id();
        $transactions = Transaction::where('user_id', $id)->get();
        $approvedTax = Transaction::where(['status'=>'approved', 'user_id'=>$id]);
        $pendingTax = Transaction::where(['status' => 'pending', 'user_id' => $id]);
        return view('home', compact('transactions', 'approvedTax', 'pendingTax'));
    }

    public function applyTax()
    {
        return view('invoice.apply');
    }

    
}
