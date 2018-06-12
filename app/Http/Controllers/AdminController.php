<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class AdminController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        $transactions = Transaction::all();
        return view('admin.index', compact('transactions'));
    }

    public function viewTax()
    {
        $transactions = Transaction::all();
        return view('admin.tax', compact('transactions'));
    }

    public function updateStatus()
    {
        
    }
}
