@extends('layouts.backend')

@section('backend')
      @php
          $product = DB::table('product')->count('id'); 
          $orders = DB::table('orders')->count('id'); 
          $user = DB::table('users')->count('id'); 
          $cat = DB::table('category')->count('id'); 
      @endphp
      
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3" style="height: 120px">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">{!!$product!!} Sản phẩm</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{route('backend.product-index')}}">
              <span class="float-left">Chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3" style="height: 120px">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">{!!$orders!!} Đơn hàng</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{route('backend.order-index')}}">
              <span class="float-left">Chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3" style="height: 120px">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">{{$user}} Khách hàng</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{route('backend.customer-index')}}">
              <span class="float-left">Chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3" style="height: 120px">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">{!!$cat!!} Danh mục</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{route('backend.category-index')}}">
              <span class="float-left">Chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
@stop()