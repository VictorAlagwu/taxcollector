<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\User;
use App\Occupation;

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
        $users = User::all();
        $approvedTax = Transaction::where('status','approved')->get();
        $pendingTax = Transaction::where('status','pending')->get();
        $occupations = Occupation::all();
        return view('admin.index', compact('transactions', 'users', 'approvedTax', 'pendingTax', 'occupations'));
    }

    public function viewTax()
    {
        $transactions = Transaction::all();
        return view('admin.tax', compact('transactions'));
    }

    public function viewUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));   
    }

    public function taxApprove($id)
    {
        //
       
        $transaction = Transaction::findOrFail($id);
        
        $transaction->status = "approved";
        $transaction->save();
        return back();
    }

    public function taxReject($id)
    {
        //
       
        $transaction = Transaction::findOrFail($id);
       
        $transaction->status = "pending";
        $transaction->save();
        return back();
    }

}
