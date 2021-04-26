<?php

namespace App\Http\Controllers;
use App\Models\Buy;
use App\Models\Client;
use App\Models\Company;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index(Request $request)
    {        
        $data['buys'] = Buy::all();
        return view('buy.list')->with($data);
    }
    public function form(Request $request)
    {
        $data['clientcodes'] = Client::all('clientCode');
        $data['companycodes'] = Company::all('nepseListedCode');
        return view('buy.form')->with($data);
    }
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'clientCode'  => 'required',
            'script'      => 'required',
            'quantity'    => 'required',
            'buyingPrice' => 'required',
            'shareType'   => 'required',            
        ]);        
        $buys               = new Buy();
        $buys->clientCode   = $request->clientCode;
        $buys->script       = $request->script;
        $buys->quantity     = $request->quantity;
        $buys->buyingPrice  = $request->buyingPrice; 
        $buys->shareType    = $request->shareType;      
        $buys->save();
        return redirect('buy/list')->with('status',"Record Added successfully");
    }
    public function destroy(Request $request)
    {
        if($request->id)
        {
            Buy::find($request->id)->delete();
            return redirect('buy/list')->with('status',"Record Deleted successfully");
        }
    }
    public function edit($id)
    {
        if($id)
        {
            $data['clientcodes'] = Client::all('clientCode');
            $data['companycodes'] = Company::all('nepseListedCode');
            $buys = Buy::find($id);
            return view('buy.edit')->with('buys', $buys)->with($data);
        }
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'clientCode'  => 'required',
            'script'      => 'required',
            'quantity'    => 'required',
            'buyingPrice' => 'required',
            'shareType'   => 'required',        
        ]);  
        if($request->id)      
        {
            $buys               = Buy::find($request->id);
            $buys->clientCode   = $request->clientCode;
            $buys->script       = $request->script;
            $buys->quantity     = $request->quantity;
            $buys->buyingPrice  = $request->buyingPrice; 
            $buys->shareType    = $request->shareType;
            $buys->save();
            return redirect('buy/list')->with('status',"Record Updated successfully");
        }
    }
}
