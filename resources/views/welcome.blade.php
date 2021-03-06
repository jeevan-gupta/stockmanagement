@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome {{Auth::user()->name}}</h3>
          </div>
          <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 grid-margin transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Today’s Bookings</p>
                <p class="fs-30 mb-2">4006</p>
                <p>10.00% (30 days)</p>
              </div>
            </div>
      </div>
      <div class="col-md-3 grid-margin transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4">Today’s Bookings</p>
            <p class="fs-30 mb-2">4006</p>
            <p>10.00% (30 days)</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4">Today’s Bookings</p>
            <p class="fs-30 mb-2">4006</p>
            <p>10.00% (30 days)</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Today’s Bookings</p>
            <p class="fs-30 mb-2">4006</p>
            <p>10.00% (30 days)</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Advanced Table</p>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="display expandable-table" style="width:100%">
                    <thead>
                      <tr>
                        <th>Quote#</th>
                        <th>Product</th>
                        <th>Business type</th>
                        <th>Policy holder</th>
                        <th>Premium</th>
                        <th>Status</th>
                        <th>Updated at</th>
                        <th></th>
                      </tr>
                    </thead>
                </table>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>
@endsection
      