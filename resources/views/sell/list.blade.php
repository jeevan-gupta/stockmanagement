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
                        <a href="{{ route('sell.add') }}" class="btn btn-primary btn-rounded btn-fw">Add New Sell</a>
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
                        <th>Script</th>
                        <th>Quantity</th>
                        <th>Selling Price</th>
                        <th>Cost on Sell</th>
                        <th>Net Receivable</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                      <?php $Sno=1; ?>
                      @foreach ($sells as $sell)                      
                      <tr>
                        <td>{{ $Sno}}</td>
                        <td>{{ $sell->clientCode }}</td>
                        <td>{{ $sell->script }}</td>
                        <td>{{ $sell->quantity }}</td>
                        <td>{{ $sell->sellingPrice }}</td>
                        <td>{{ $sell->costOnSell }}</td> 
                        <td>{{ $sell->netReceivable }}</td>                      
                        <td>
                            <a href="update/{{ $sell->id }}" class="btn btn-success btn-sm"><i class="ti-file btn-icon-prepend"></i></a>
                            <a href="delete/{{ $sell->id }}" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>
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
      