@extends('layouts.frontend')

@section('frontend')
		<div class="container">

			<div class="panel panel-primary" style="margin-top: 20px;">
				<div class="panel-heading">
					<h3 class="panel-title">Đơn hàng của tôi</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover text-center">
						<thead>
							<tr>
								<th class="text-center">STT</th>
								<th class="text-center">Ngày đặt</th>
								<th class="text-center">Trạng thái</th>
								<th class="text-center">Chi tiết</th>
							</tr>
						</thead>
						<tbody>
							@php
								$i = 0
							@endphp
							@foreach($cus_order as $co)
							<tr>
								<td>{{$i+=1}}</td>
								<td>{{$co->created_at}}</td>
								<td>
									@if($co->status == 1)
										<span href="" title="" class="label label-danger">Chờ duyệt</span>
									@else
										<span href="" title="" class="label label-primary">Đã duyệt</span>
									@endif
								</td>
								<td>
									<a href="{{route('frontend.order-detail',['id'=>$co->id])}}" title="" class="btn btn-success"><i class="fa fa-eye"></i> Xem chi tiết</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
@stop

