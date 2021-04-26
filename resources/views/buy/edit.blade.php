@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">    
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Update Buy Record</h4>  
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ session('status') }}
              </div>
              @endif   
              <form action="{{'update'}}" method="POST"> 
                @csrf 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Client Code</label>
                          <div class="col-sm-9">
                            <input type="hidden" name="id" value="{{$buys->id}}">
                            <select class="form-control" name="clientCode" required>
                                <option value="{{ $buys->clientCode }}">{{ $buys->clientCode }}</option>
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
                            <option value="{{ $buys->script }}">{{ $buys->script }}</option>
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
                        <input type="text" name="quantity" value="{{ $buys->quantity }}" class="form-control" placeholder="Quantity" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Buying Price</label>
                      <div class="col-sm-9">
                        <input type="text" name="buyingPrice" value="{{ $buys->buyingPrice}}" class="form-control" placeholder="Buying Price" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Share Type</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="shareType" required>
                            <option value="{{ $buys->shareType}}">{{ $buys->shareType}}</option>                            
                                <option value="IPO">IPO</option>
                                <option value="FPO">FPO</option>
                                <option value="AUCTION">AUCTION</option>
                                <option value="SECONDARY MARKET">SECONDARY MARKET</option>
                        </select>
                      </div>
                    </div>
                  </div>                  
                </div>                
                <input type="submit" value="Update" class="btn btn-primary auth-form-btn">
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
      