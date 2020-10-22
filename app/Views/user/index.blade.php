@extends('layouts.backend')
@section('title','Quản trị')
@section('backend')

	<a href="{{route('backend.user-add')}}" title="" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
	<div class="text-center">
		<table class="table table-hover table-bordered" style="margin-top: 20px;">
			<thead>
				<tr style="background-color: #f5f5f5">
					<th class="text-center">ID</th>
					<th class="text-center">Tên</th>
					<th class="text-center">Email</th>
					<th class="text-center">Ngày tạo</th>
					<th class="text-center">Chức năng</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $u)
				<tr>
					<td>{{$u->id}}</td>
					<td>{{$u->name}}</td>
					<td>{{$u->email}}</td>
					<td>{{$u->created_at}}</td>
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