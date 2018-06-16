<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Occupation;

class OccupationController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $occupations = Occupation::all();
        return view('occupations.index', [
            'occupations' => $occupations,
        ]);
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
        $occupation['name'] = $request->name;
        $occupation['taxrate'] = $request->taxrate;

        Occupation::create($occupation);
        return redirect ('occupations');
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
        $occupation = Occupation::where('id',$id)->first();
        return view('occupations.edit', compact('occupation'));
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
        
        $occupation['name'] = $request->name;
        $occupation['taxrate'] = $request->taxrate;

        Occupation::where('id',$id)->update($occupation);

        return redirect ('occupations');
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
        $occupation = Occupation::findOrFail($id);
        $occupation->delete();

        return back();
    }
}
