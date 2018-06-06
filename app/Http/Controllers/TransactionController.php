<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

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
        //
        $this->validate($request, [
            'transport' => 'max:20000',
            'housing' => 'max:150000',
            'utility' => 'max:10000',
            'entertainment' => 'max:6000',
            'children_num' => 'max:4',
            'dependant_num' => 'max:2',
        ]);

        $transaction['user_id'] = auth()->id();
        $transaction['income'] = $request->income;
        $transaction['transport'] = $request->transport;
        $transaction['housing'] = $request->housing;
        $transaction['utility'] = $request->utility;
        $transaction['entertainment'] = $request->entertainment;
        $transaction['children_num'] = $request->children_num;
        $transaction['children'] = $request->children * $transaction['children_num'];
        $transaction['dependant_num'] = $request->dependant_num;
        $transaction['dependant'] = $request->dependant * $transaction['dependant_num'];
        $transaction['pers'] = ($transaction['income'] * 0.2) + ($transaction['income'] >= 240000 ? 200000 : 20000);
        $transaction['pension'] = 0.008 *
                                    ($transaction['income'] + 
                                    $transaction['housing'] + 
                                    $transaction['transport']);
        $transaction['nhf'] = (0.025 * $transaction['income']);
        $transaction['freepay'] = $transaction['nhf'] + $transaction['pension'] + $transaction['pers'];
        $transaction['grosspay'] = $transaction['income'] + 
                                  $transaction['transport'] + 
                                  $transaction['housing'] + 
                                  $transaction['utility'] + 
                                  $transaction['entertainment'] +
                                  $transaction['children'] +
                                  $transaction['dependant']
                                  ;
        $transaction['taxable'] = $transaction['grosspay'] - $transaction['freepay'];

        Transaction::create($transaction);
        return redirect('/home');

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
    public function update(Request $request, $id)
    {
        //
    }

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
}
