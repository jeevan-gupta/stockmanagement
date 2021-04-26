@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">
  <div class="content-wrapper">    
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Client's Detail Information</p>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('status') }}
            </div>
            @endif
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="display expandable-table table-striped" style="width:100%">
                    <tbody>
                      <tr>
                        <td>Client Code</td>
                        <td>{{ $clients->clientCode }}</td>                        
                      </tr>
                      <tr>
                        <td>Name</td> 
                        <td><label class="badge badge-primary">{{ $clients->name }}</label></td>                       
                      </tr>
                      <tr>
                        <td>Contact</td>
                        <td>{{ $clients->contact }}</td>
                      </tr>
                      <tr>
                          <td>Current Address</td>
                          <td>{{ $clients->currentAddress}}</td>
                      </tr>
                      <tr>
                          <td>Permanent Address</td>
                          <td>{{ $clients->permanentAddress }}</td>
                      </tr>
                      <tr>
                        <td>Joining Date</td>
                        <td><label class="badge badge-success">{{ $clients->joiningDate}}</label></td>
                      </tr>
                      <tr>
                        <td>Expiry Date</td>
                        <td><label class="badge badge-danger">{{ $clients->expiryDate}}</label></td>
                      </tr>
                      <tr>
                          <td>Citizenship No.</td>
                          <td>{{ $clients->CitizenshipNo }}</td>
                      </tr>
                      <tr>
                          <td>Citizenship Issue Date</td>
                          <td>{{ $clients->citizenIssueDate }}</td>
                      </tr>
                      <tr>
                          <td>citizenship Issue Place</td>
                          <td>{{ $clients->citizenIssuePlace }}</td>
                      </tr>
                      <tr>
                          <td>Bank Name</td>
                          <td>{{ $clients->bankName }}</td>
                      </tr>
                      <tr>
                          <td>Account Number</td>
                          <td>{{ $clients->accountNo }}</td>
                      </tr>
                      <tr>
                          <td>Demat Number</td>
                          <td>{{ $clients->dematNo }}</td>
                      </tr>
                    </tbody>
                </table>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
      