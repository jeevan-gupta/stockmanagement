@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">    
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <p class="card-title"><a href="{{ route('client.list') }}" class="btn btn-primary btn-rounded btn-fw">All Clients</a> </p>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ session('status') }}
              </div>
              @endif   
              <form action="{{ route('client.submit') }}" method="POST"> 
                @csrf        
                <p class="card-description">
                  Client info.
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Full Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="Client Full Name" required/>
                          </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Cur. Address</label>
                      <div class="col-sm-9">
                        <input type="text" name="cAddress" class="form-control" placeholder="Current Address" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Per. Address</label>
                      <div class="col-sm-9">
                        <input type="text" name="pAddress" class="form-control" placeholder="Permanent Address" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Contact No.</label>
                      <div class="col-sm-9">
                        <input type="text" name="contact" class="form-control" placeholder="Contact No." required/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Joining Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="joiningdate" class="form-control" placeholder="dd/mm/yyyy" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Expiry Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="expiryDate" class="form-control" placeholder="dd/mm/yyyy" required/>                        
                      </div>
                    </div>
                  </div>
                </div>
                <p class="card-description">
                  Citizenship info.
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">ID. No</label>
                      <div class="col-sm-9">
                        <input type="text" name="citizenNo" class="form-control" placeholder="Citizenship No." required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Issue Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="dateOfIssue" class="form-control" placeholder="dd/mm/yyyy" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Issue Place</label>
                      <div class="col-sm-9">
                        <input type="text" name="placeIssue" class="form-control" placeholder="Place of Citizenship issue" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="card-description">
                  Bank info.
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Bank Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="bankName" class="form-control" placeholder="Bank Name." required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Account No.</label>
                      <div class="col-sm-9">
                        <input type="text" name="accountNo" class="form-control" placeholder="Bank Account No." required/>
                      </div>
                    </div>
                  </div>                  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Demat No.</label>
                      <div class="col-sm-9">
                        <input type="text" name="dematNo" class="form-control" placeholder="Demat No." required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Client Code</label>
                      <div class="col-sm-9">
                        <input type="text" name="clientCode" class="form-control" placeholder="Client Code" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="submit" value="Add Client" class="btn btn-primary auth-form-btn">
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
      