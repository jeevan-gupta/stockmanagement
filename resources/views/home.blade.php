@extends('layouts.master')
@section('panelcontent')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-3 grid-margin transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4 text-center">Total Clients</p>
                <p class="fs-30 mb-2 text-center">{{ $totalclient }}</p>
                <p class="text-center"><a class="text-white stretched-link" href="{{ route('client.list') }}">View Client Details</a></p>
              </div>
            </div>
      </div>
      <div class="col-md-3 grid-margin transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4 text-center">Total Companies</p>
            <p class="fs-30 mb-2 text-center">{{ $totalCompany }}</p>
            <p class="text-center"><a class="text-white stretched-link" href="{{ route('company.list') }}"> View Company Details</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4 text-center">Total's Sells</p>
            <p class="fs-30 mb-2 text-center">{{ $totalSell}}</p>
            <p class="text-center"><a class="text-white stretched-link" href="{{ route('sell.list') }}"> View Sell Details</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4 text-center">Total's Buy</p>
            <p class="fs-30 mb-2 text-center">{{ $totalBuy }}</p>
            <p class="text-center"><a class="text-white stretched-link" href="{{ route('buy.list') }}"> View Buy Details</a></p>
          </div>
        </div>
      </div>
    </div>

  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  {{-- <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. <a href="#" target="_blank">Stock Management</a> from Smart TechnoSoft. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made by Sandeep Kumar Sah <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer> --}}
  <!-- partial -->
</div>
@endsection
      