@extends('layouts.frontend')

@section('frontend')
		<div class="container">
			<div class="panel panel-primary" style="margin-top: 20px;">
				<div class="panel-heading">
					<h3 class="panel-title">Chi tiết đơn hàng</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover table-bordered text-center">
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
								$i = 0
							@endphp
							@foreach($order_detail->detail as $od)
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
					<div class="text-center">
						<a href="{{route('frontend.cus-order')}}" title="" class="btn btn-primary" ><i class="fa fa-backward"></i> Trở về</a>
					</div>
				</div>
			</div>
		</div>
@stop

