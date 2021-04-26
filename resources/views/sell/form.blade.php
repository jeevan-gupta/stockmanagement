@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">    
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <p class="card-title"><a href="{{ route('sell.list') }}" class="btn btn-primary btn-rounded btn-fw">All Sell Records</a> </p>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ session('status') }}
              </div>
              @endif   
              <form action="{{ route('sell.submit') }}" method="POST"> 
                @csrf 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Client Code</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="clientCode" required>
                                <option value="">Select Client Code</option>
                                @foreach ($clientcodes as $clientcode)
                                    <option value="{{ $clientcode->clientCode}}">{{ $clientcode->clientCode}}</option>                                    
                                @endforeach
                            </select>
                          </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Script</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="script" required>
                            <option value="">Select Script</option>
                            @foreach ($companycodes as $companycode)
                                <option value="{{ $companycode->nepseListedCode}}">{{ $companycode->nepseListedCode}}</option>                                    
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Quantity</label>
                      <div class="col-sm-9">
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Selling Price</label>
                      <div class="col-sm-9">
                        <input type="text" name="sellingPrice" class="form-control" placeholder="selling Price" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">                    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Cost on Sell</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="costOnSell" required>
                            <option value="">Select Cost on Sell</option>                            
                                <option value="CGT">CGT</option>
                                <option value="SEBON CHARGE">SEBON CHARGE</option>                                
                                <option value="DP COST">DP COST</option>
                                <option value="TMS">TMS</option>
                                <option value="CHARGE">CHARGE</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Net Receivable</label>
                      <div class="col-sm-9">
                        <input type="text" name="netReceivable" class="form-control" placeholder="Net Receivable" required/>
                      </div>
                    </div>
                  </div>                  
                </div>                
                <input type="submit" value="Submit" class="btn btn-primary auth-form-btn">
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
      