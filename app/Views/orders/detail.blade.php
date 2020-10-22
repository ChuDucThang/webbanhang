@extends('layouts.backend')
@section('title','Chi tiết đơn hàng')
@section('backend')
	<!-- Button trigger modal -->
	<form action="" method="POST">

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="panel panel-default">
			<div class="table-responsive text-center">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">ID</th>
							<th class="text-center">Tên khách hàng</th>
							<th class="text-center">Địa chỉ</th>
							<th class="text-center">Điện thoại</th>
							<th class="text-center">Ngày đặt</th>
							<th class="text-center">Tổng tiền</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{$order->id}}</td>
							<td>{{$order->username}}</td>
							<td>{{$order->address}}</td>
							<td>{{$order->phone}}</td>
							<td>{{date('H:i d-m-Y',strtotime($order->user->created_at))}}</td>
							<td>{{number_format($order->amount + 40000)}} VNĐ</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="panel-heading" style="margin-top: 30px;">
				<h3 class="panel-title">Chi tiết sản phẩm trong đơn hàng</h3>
			</div>
			<div class="panel-body">
				<div class="text-center table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="text-center">STT</th>
								<th class="text-center">Ảnh</th>
								<th class="text-center">Tên sản phẩm</th>
								<th class="text-center">Số lượng</th>
								<th class="text-center">Thành tiền</th>
							</tr>
						</thead>
						<tbody>
							@php
								$i = 0;
							@endphp
							@foreach($order->detail as $od)
							<tr>
								<td>{{$i+=1}}</td>
								<td>
									<img src="{{url('uploads/product')}}/{{$od->pro['image']}}" width="100" alt="">
								</td>
								<td>
									{{$od->pro['name']}}
								</td>
								<td>{{$od['quantity']}}</td>
								<td>{{number_format($od['price']*$od['quantity'])}} VNĐ</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		@if($order->status == 2)
		<span class="btn btn-success">Đơn hàng đã xác nhận</span>
		<a href="{{route('backend.order-index')}}" title="" class="btn btn-primary" ><i class="fa fa-backward"></i> Trở về</a>
		@else
		<button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xác nhận đơn hàng này không?')">Xác nhận đơn hàng</button>
		@endif
	</form>
@stop()