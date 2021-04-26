@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">    
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <p class="card-title"><a href="{{ route('company.list') }}" class="btn btn-primary btn-rounded btn-fw">All Companies</a> </p> 
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ session('status') }}
              </div>
              @endif   
              <form action="{{ route('company.submit') }}" method="POST"> 
                @csrf        
                <p class="card-description">
                  Company info.
                </p>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Company Name</label>
                          <div class="col-sm-8">
                            <input type="text" name="companyName" class="form-control" placeholder="Company Name" required/>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Nepse Listed Code</label>
                      <div class="col-sm-8">
                        <input type="text" name="nepaseListedName" class="form-control" placeholder="Nepse Listed Name" required/>
                      </div>
                    </div>
                  </div>
                </div>                
                <input type="submit" value="Add Company" class="btn btn-primary auth-form-btn">
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
      