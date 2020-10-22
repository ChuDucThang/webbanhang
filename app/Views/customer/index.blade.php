@extends('layouts.backend')
@section('title','Tài khoản')
@section('backend')

	<div class="text-center">
		<table class="table table-hover table-bordered" style="margin-top: 20px;">
			<thead>
				<tr style="background-color: #f5f5f5">
					<th class="text-center">ID</th>
					<th class="text-center">Tên</th>
					<th class="text-center">Email</th>
					<th class="text-center">Số điện thoại</th>
					<th class="text-center">Giới tính</th>
					<th class="text-center">Chức năng</th>
				</tr>
			</thead>
			<tbody>
				@php
					$i = 0;
				@endphp
				@foreach($customer as $cus)
				<tr>
					<td>{{$i+=1}}</td>
					<td>{{$cus['full_name']}}</td>
					<td>{{$cus['email']}}</td>
					<td>{{$cus['phone']}}</td>
					<td>
						@if($cus['gender'] == 1)
							Nam
						@else
							Nữ
						@endif
					</td>
					<td>
						<a href="" title="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Sửa</a>
						<a href="" title="" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop()