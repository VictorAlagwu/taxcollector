<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Unicodeveloper\Paystack\Paystack;
use Carbon\Carbon;
use App\Transaction;
use Auth;

class TransactionController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transactions = Transaction::where('user_id', auth()->id())->get();
        return view('taxs.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('taxs.applytax');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'transport' => 'integer|between:0,20000',
            'housing' => 'integer|between:0,10000',
            'utility' => 'integer|between:0,10000',
            'entertainment' => 'integer|between:0,6000',
            'children_num' => 'integer|between:1,4',
            'dependant_num' => 'integer|between:1,2',
            'period' => 'required|unique_with:transactions,user_id',
            'user_id' => 'required',
        ]);

        $transaction['user_id'] = $request->user_id;
        $transaction['period'] = $request->period;
        $transaction['income'] = $request->income;
        $transaction['transport'] = empty($request->transport) ? 0 : $request->transport;
        $transaction['housing'] = empty($request->housing) ? 0 : $request->housing;
        $transaction['utility'] = empty($request->utility) ? 0 : $request->utility;
        $transaction['entertainment'] = empty($request->entertainment) ? 0 : $request->entertainment;
        $transaction['children_num'] = empty($request->children_num) ? 1 : $request->children_num;
        $transaction['children'] = empty($request->children) ? 0 : ($request->children * $transaction['children_num']);
        $transaction['dependant_num'] = empty($request->dependant_num) ? 1 : $request->dependant_num;
        $transaction['dependant'] = $request->dependant * $transaction['dependant_num'];
        $transaction['pension'] = 0.008 *
                                    ($transaction['income'] + 
                                    $transaction['housing'] + 
                                    $transaction['transport']);
        $transaction['nhf'] = (0.025 * $transaction['income']);
        
        $transaction['grosspay'] = $transaction['income'] + 
                                  $transaction['transport'] + 
                                  $transaction['housing'] + 
                                  $transaction['utility'] + 
                                  $transaction['entertainment'] +
                                  $transaction['children'] +
                                  $transaction['dependant']
                                  ;
        $transaction['pers'] = ($transaction['grosspay'] * 0.2) + (16666);
        $transaction['freepay'] = $transaction['nhf'] + $transaction['pension'] + $transaction['pers'];
        $transaction['taxable'] = $transaction['grosspay'] - $transaction['freepay'];
        $transaction['status'] = "pending";

        
        $transaction = Transaction::create($transaction);
        return redirect('tax/verify/'.$transaction->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function taxVerify($id)
    {
       
        $user = auth()->id();
        
        $transaction = Transaction::where(['id' => $id])->first();

        if($transaction->user_id == $user || Auth::user()->status == 'admin'){
            return view('taxs.verify', compact('transaction'));
        }else{
            return redirect('home');
        }
        

        
    }
    public function payment($username, $id)
    {
        $username = auth()->id();
        $transaction = Transaction::where(['id' => $id, 'user_id' => $username])->first();
        return view('payment.index', compact('username','transaction'));
    }
}
