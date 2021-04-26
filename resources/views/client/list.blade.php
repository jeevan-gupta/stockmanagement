@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">
  <div class="content-wrapper">    
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                      <div class="col-sm-9">
                        <a href="{{ route('client.add') }}" class="btn btn-primary btn-rounded btn-fw">Add New Client</a>
                      </div>
                </div>
              </div>
            </div>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('status') }}
            </div>
            @endif
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Client Code</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Joining Date</th>
                        <th>Expiry Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                      <?php $Sno=1; ?>
                      @foreach ($clients as $client)                      
                      <tr>
                        <td>{{ $Sno}}</td>
                        <td>{{ $client->clientCode}}</td>
                        <td>{{ $client->name}}</td>
                        <td>{{ $client->contact}}</td>
                        <td><label class="badge badge-success">{{ $client->joiningDate}}</label></td>
                        <td><label class="badge badge-danger">{{ $client->expiryDate}}</label></td>
                        <td>
                            <a href="show/{{ $client->id }}" class="btn btn-primary btn-sm"><i class="ti-eye btn-icon-prepend"></i></a> 
                            <a href="update/{{ $client->id }}" class="btn btn-success btn-sm"><i class="ti-file btn-icon-prepend"></i></a>
                            <a href="delete/{{ $client->id }}" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                        </td>
                      </tr>
                      <?php $Sno++ ?>
                      @endforeach
                        
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
      