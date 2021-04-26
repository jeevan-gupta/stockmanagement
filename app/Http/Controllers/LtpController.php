<?php

namespace App\Http\Controllers;
use App\Models\Ltp;
use App\Models\Company;
use Illuminate\Http\Request;

class LtpController extends Controller
{
    public function index(Request $request)
    {        
        $data['ltps'] = Ltp::all();
        return view('ltp.list')->with($data);
    }
    public function form(Request $request)
    {
        $data['companycodes'] = Company::all('nepseListedCode');
        return view('ltp.form')->with($data);
        
    }
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'script'          => 'required',
            'lastTredingPrice'      => 'required',            
        ]);        
        $ltps                    = new Ltp();
        $ltps->script       = $request->script;
        $ltps->lastTredingPrice = $request->lastTredingPrice ;       
        $ltps->save();
        return redirect('ltp/list')->with('status',"LTP Added successfully");
    }
    public function destroy(Request $request)
    {
        if($request->id)
        {
            Ltp::find($request->id)->delete();
            return redirect('ltp/list')->with('status',"LTP Deleted successfully");
        }
    }
    public function edit($id)
    {
        if($id)
        {
            $data['companycodes'] = Company::all('nepseListedCode');
            $ltps = Ltp::find($id);
            return view('ltp.edit')->with('ltps', $ltps)->with($data);
        }
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'script'          => 'required',
            'lastTredingPrice'      => 'required',             
        ]);
        if($request->id)      
        {
            $ltps                   = Ltp::find($request->id);
            $ltps->script           = $request->script;
            $ltps->lastTredingPrice = $request->lastTredingPrice ;            
            $ltps->save();
            return redirect('ltp/list')->with('status',"LTP Updated successfully"); 
        }
    }
}
