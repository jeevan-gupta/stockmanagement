<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {        
        $data['companies'] = Company::all();
        return view('company.list')->with($data);
    }
    public function form(Request $request)
    {
        return view('company.form');
    }
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'companyName'          => 'required|string',
            'nepaseListedName'      => 'required',            
        ]);        
        $companies                    = new Company();
        $companies->companyName       = $request->companyName;
        $companies->nepseListedCode = $request->nepaseListedName ;       
        $companies->save();
        return redirect('company/list')->with('status',"Company Added successfully");
    }
    public function destroy(Request $request)
    {
        if($request->id)
        {
            Company::find($request->id)->delete();
            return redirect('company/list')->with('status',"Company Deleted successfully");
        }
    }
    public function edit($id)
    {
        if($id)
        {
            $companies = Company::find($id);
            return view('company.edit')->with('companies', $companies);
        }
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'companyName'          => 'required|string',
            'nepaseListedName'      => 'required',            
        ]);
        if($request->id)      
        {
            $companies                    = Company::find($request->id);
            $companies->companyName       = $request->companyName;
            $companies->nepseListedCode = $request->nepaseListedName ;       
            $companies->save();
            return redirect('company/list')->with('status',"Company Updated successfully"); 
        }
    }
}
