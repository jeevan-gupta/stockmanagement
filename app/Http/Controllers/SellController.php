<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Company;
use App\Models\Sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index(Request $request)
    {        
        $data['sells'] = Sell::all();
        return view('sell.list')->with($data);
    }
    public function form(Request $request)
    {
        $data['clientcodes'] = Client::all('clientCode');
        $data['companycodes'] = Company::all('nepseListedCode');
        return view('sell.form')->with($data);
    }
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'clientCode'  => 'required',
            'script'      => 'required',
            'quantity'    => 'required',
            'sellingPrice' => 'required',
            'costOnSell'   => 'required', 
            'netReceivable'=> 'required',           
        ]);        
        $sells               = new Sell();
        $sells->clientCode   = $request->clientCode;
        $sells->script       = $request->script;
        $sells->quantity     = $request->quantity;
        $sells->sellingPrice  = $request->sellingPrice; 
        $sells->costOnSell    = $request->costOnSell; 
        $sells->netReceivable= $request->netReceivable;     
        $sells->save();
        return redirect('sell/list')->with('status',"Record Added successfully");
    }
    public function destroy(Request $request)
    {
        if($request->id)
        {
            Sell::find($request->id)->delete();
            return redirect('sell/list')->with('status',"Record Deleted successfully");
        }
    }
    public function edit($id)
    {
        if($id)
        {
            $data['clientcodes'] = Client::all('clientCode');
            $data['companycodes'] = Company::all('nepseListedCode');
            $sells = Sell::find($id);
            return view('sell.edit')->with('sells', $sells)->with($data);
        }
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'clientCode'  => 'required',
            'script'      => 'required',
            'quantity'    => 'required',
            'sellingPrice' => 'required',
            'costOnSell'   => 'required', 
            'netReceivable'=> 'required',        
        ]);  
        if($request->id)      
        {
            $sells               = Sell::find($request->id);
            $sells->clientCode   = $request->clientCode;
            $sells->script       = $request->script;
            $sells->quantity     = $request->quantity;
            $sells->sellingPrice  = $request->sellingPrice; 
            $sells->costOnSell    = $request->costOnSell; 
            $sells->netReceivable= $request->netReceivable;    
            $sells->save();
            return redirect('sell/list')->with('status',"Record Updated successfully");
        }
    }
}
