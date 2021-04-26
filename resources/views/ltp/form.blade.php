@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">    
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <p class="card-title"><a href="{{ route('ltp.list') }}" class="btn btn-primary btn-rounded btn-fw">All LTP Lists of Company</a> </p> 
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ session('status') }}
              </div>
              @endif   
              <form action="{{ route('ltp.submit') }}" method="POST"> 
                @csrf        
                <p class="card-description">
                  LTP Info.
                </p>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Script</label>
                          <div class="col-sm-8">
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
                  <div class="col-md-8">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Last Treding Price</label>
                      <div class="col-sm-8">
                        <input type="text" name="lastTredingPrice" class="form-control" placeholder="Last Treding Price" required/>
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
      