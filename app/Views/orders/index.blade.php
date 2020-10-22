@extends('layouts.backend')
@section('title','Đơn hàng')
@section('backend')
	<!-- Button trigger modal -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Danh sách đơn hàng</h3>
			</div>
			<div class="panel-body">
				<div class="text-center table-responsive">
					<table class="table table-hover" style="margin-top: 20px;">
						<thead>
							<tr style="background-color: #f5f5f5">
								<th class="text-center">ID</th>
								<th class="text-center">Tên</th>
								<th class="text-center">Địa chỉ</th>
								<th class="text-center">Số điện thoại</th>
								<th class="text-center">Ngày đặt</th>
								<th class="text-center">Thành tiền</th>
								<th class="text-center">Trạng thái</th>
								<th class="text-center">Chức năng</th>
							</tr>
						</thead>
						<tbody>
							@foreach($order as $od)
							<tr>
								<td>{{$od->id}}</td>
								<td>{{$od->user->name}}</td>
								<td width="300px">{{$od->user->address}}</td>
								<td>{{$od->user->phone}}</td>
								<td>{{date('H:i d-m-Y',strtotime($od->user->created_at))}}</td>
								<td>{{number_format($od->amount)}} VNĐ</td>
								<td>
									@if($od->status == 1)
										<span class="label label-danger">Chưa xác nhận</span>
									@else
										<span class="label label-success"> Đã xác nhận</span>
									@endif
								</td>
								<td>
									<a href="{{route('backend.order-edit',['id' => $od->id])}}" title="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Chi tiết</a>
									<a href="{{route('backend.order-delete',['id' => $od->id])}}" title="" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
@stop()