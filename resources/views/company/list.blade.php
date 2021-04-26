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
                        <a href="{{ route('company.add') }}" class="btn btn-primary btn-rounded btn-fw">Add New Company</a>
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
                        <th>Company Name</th>
                        <th>Nepse Listed Code</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                      <?php $Sno=1; ?>
                      @foreach ($companies as $company)                      
                      <tr>
                        <td>{{ $Sno}}</td>
                        <td>{{ $company->companyName}}</td>
                        <td>{{ $company->nepseListedCode}}</td>                        
                        <td>
                            <a href="update/{{ $company->id }}" class="btn btn-success btn-sm"><i class="ti-file btn-icon-prepend"></i></a>
                            <a href="delete/{{ $company->id }}" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>
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
      