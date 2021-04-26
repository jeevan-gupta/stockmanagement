<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function index(Request $request)
    {        
        $data['clients'] = Client::all();
        return view('client.list')->with($data);
    }
    public function form(Request $request)
    {
        return view('client.form');
    }
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string',
            'cAddress'      => 'required',
            'pAddress'      => 'required',
            'contact'       => 'required',
            'joiningdate'   => 'required',
            'expiryDate'    => 'required',
            'citizenNo'     => 'required',
            'dateOfIssue'   => 'required',
            'placeIssue'    =>'required',
            'bankName'      => 'required',
            'accountNo'     => 'required',
            'dematNo'       => 'required',
        ]);        
        $clients                    = new Client();
        $clients->name              = $request->name;
        $clients->clientCode        = $request->clientCode;
        $clients->currentAddress    = $request->cAddress;
        $clients->permanentAddress  = $request->pAddress;
        $clients->contact           = $request->contact;
        $clients->joiningDate       = Carbon::parse($request->joiningdate)->format('Y-m-d');
        $clients->expiryDate        = Carbon::parse($request->expiryDate)->format('Y-m-d');
        $clients->CitizenshipNo     = $request->citizenNo;
        $clients->citizenIssueDate  = Carbon::parse($request->dateOfIssue)->format('Y-m-d');
        $clients->citizenIssuePlace = $request->placeIssue;
        $clients->bankName          = $request->bankName;
        $clients->accountNo         = $request->accountNo;
        $clients->dematNo           = $request->dematNo;
        $clients->save();
        return redirect('client/list')->with('status',"Client Added successfully");
    }
    public function show(Request $request)
    {
        if($request->id)
        {
            $data['clients'] = Client::find($request->id);
            return view('client.show')->with($data);
        }
    }
    public function destroy(Request $request)
    {
        if($request->id)
        {
            Client::find($request->id)->delete();
            return redirect('client/list')->with('status',"Client Deleted successfully");
        }
    }
    public function edit($id)
    {
        if($id)
        {
            $clients = Client::find($id);
            return view('client.edit')->with('clients', $clients);
        }
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string',
            'cAddress'      => 'required',
            'pAddress'      => 'required',
            'contact'       => 'required',
            'joiningdate'   => 'required',
            'expiryDate'    => 'required',
            'citizenNo'     => 'required',
            'dateOfIssue'   => 'required',
            'placeIssue'    =>'required',
            'bankName'      => 'required',
            'accountNo'     => 'required',
            'dematNo'       => 'required',
        ]);  
        if($request->id)      
        {
            $clients                    = Client::find($request->id);
            $clients->name              = $request->name;
            $clients->clientCode        = $request->clientCode;
            $clients->currentAddress    = $request->cAddress;
            $clients->permanentAddress  = $request->pAddress;
            $clients->contact           = $request->contact;
            $clients->joiningDate       = Carbon::parse($request->joiningdate)->format('Y-m-d');
            $clients->expiryDate        = Carbon::parse($request->expiryDate)->format('Y-m-d');
            $clients->CitizenshipNo     = $request->citizenNo;
            $clients->citizenIssueDate  = Carbon::parse($request->dateOfIssue)->format('Y-m-d');
            $clients->citizenIssuePlace = $request->placeIssue;
            $clients->bankName          = $request->bankName;
            $clients->accountNo         = $request->accountNo;
            $clients->dematNo           = $request->dematNo;
            $clients->save();
            return redirect('client/list')->with('status',"Client Updated successfully");
        }
    }
}
