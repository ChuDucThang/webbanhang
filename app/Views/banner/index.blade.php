@extends('layouts.backend')
@section('title','Banner')
@section('backend')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách banner</h3>
	</div>
	<div class="panel-body">
		@if(Auth::user()->level=='1')
			<a href="{{route('backend.banner-add')}}" title="" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
		@else
			<a href="{{route('backend.banner-add')}}" title="" class="btn btn-success" disabled><i class="fa fa-plus"></i> Thêm mới</a>
		@endif
			<div class="text-center">
			<table class="table table-hover table-bordered" style="margin-top: 20px;">
				<thead>
					<tr style="background-color: #f5f5f5">
						<th class="text-center">ID</th>
						<th class="text-center">Tên banner</th>
						<th class="text-center">Ảnh</th>
						<th class="text-center">Trạng thái</th>
						<th class="text-center">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					@foreach($banner as $b)
					<tr>
						<td>{!!$b->id!!}</td>
						<td>{!!$b->name!!}</td>
						<td>
							<img src="{!!url('/uploads/banner')!!}/{!!$b->image!!}" alt="" width="100">
						</td>
						<td>
							@if($b->status==1)
								Hiển thị
							@else
								Không hiển thị
							@endif
						</td>
						<td>
							@if(Auth::user()->level=='1')
							<a href="{!!route('backend.banner-edit',['id' => $b->id])!!}" title="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Sửa</a>
							<a href="{!!route('backend.banner-delete',['id' => $b->id])!!}" title="" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
							@else
							<a href="{!!route('backend.banner-edit',['id' => $b->id])!!}" title="" class="btn btn-primary btn-sm" disabled><i class="fa fa-edit"></i> Sửa</a>
							<a href="{!!route('backend.banner-delete',['id' => $b->id])!!}" title="" class="btn btn-danger btn-sm" disabled><i class="fa fa-trash"></i> Xóa</a>
							@endif
						</td>
					</tr>
					@endforeach()
				</tbody>
			</table>
			{{$banner->links()}}
		</div>
	</div>
</div>
@stop()