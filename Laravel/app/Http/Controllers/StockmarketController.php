<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StockmarketController extends Controller
{
    //
    public function index(){
        $stockmarkets = Stockmarket::latest->paginate(5);
        return view('stockmarkets.index',compact('stockmarket'))->with('i',(request()->input('page',1)-1)*5);
    }
    public function create(){
        return view('stockmarkets.create');
    }
    public function store(Request $request){
        $request->validate([
            'date' => 'required',
            'trade_code' => 'required',
            'high' => 'required',
            'low' => 'required',
            'open' => 'required',
            'close' => 'required',
            'volume' => 'required'
        ]);
        Stockmarket::create($request->all())
        return redirect()->route('stockmarkets.index')
        ->with('success', 'Stock data created successfully.');
    }
    
    public function show(Stockmarket $stockmarkets){
        return view('stockmarkets.show',compact('stockmarket'));
    }
    public function endit(Stockmarket $stockmarkets){
        return view('stockmarkets.edit',compact('stockmarket'));
    }

    public function update(Request $request, Stockmarket $stockmarkets)
    {
        $request->validate([
            'date' => 'required',
            'trade_code' => 'required',
            'high' => 'required',
            'low' => 'required',
            'open' => 'required',
            'close' => 'required',
            'volume' => 'required'
        ]);
        $stockmarkets->update($request->all());

        return redirect()->route('stockmarkets.index')
            ->with('success', 'Stock data updated successfully');
    }
    public function destroy(Stockmarket $stockmarkets)
    {
        $stockmarkets->delete();

        return redirect()->route('stockmarkets.index')
            ->with('success', 'Stock data deleted successfully');
    }
}
