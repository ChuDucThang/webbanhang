@extends('layouts.backend')
@section('title','Danh mục')
@section('backend')
	<!-- Button trigger modal -->
	@if(Auth::user()->level=='1')
	<a href="{{route('backend.category-add')}}" title="" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
	@else
	<a href="{{route('backend.category-add')}}" title="" class="btn btn-success" disabled><i class="fa fa-plus"></i> Thêm mới</a>
	@endif
	<div class="text-center">
		<table class="table table-hover table-bordered" style="margin-top: 20px;">
			<thead>
				<tr style="background-color: #f5f5f5">
					<th class="text-center">ID</th>
					<th class="text-center">Tên danh mục</th>
					<th class="text-center">Trạng thái</th>
					<th class="text-center">Chức năng</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cats as $c)
				<tr>
					<td>{!!$c->id!!}</td>
					<td>{!!$c->name!!}</td>
					<td>
						@if($c->status==1)
							Hiển thị
						@else
							Không hiển thị
						@endif
					</td>
					<td>
						@if(Auth::user()->level=='1')
						<a href="{!!route('backend.category-edit',['id' => $c->id])!!}" title="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Sửa</a>
						<a href="{!!route('backend.category-delete',['id' => $c->id])!!}" title="" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
						@else
						<a href="{!!route('backend.category-edit',['id' => $c->id])!!}" title="" class="btn btn-primary btn-sm" disabled><i class="fa fa-edit"></i> Sửa</a>
						<a href="{!!route('backend.category-delete',['id' => $c->id])!!}" title="" class="btn btn-danger btn-sm" disabled><i class="fa fa-trash"></i> Xóa</a>
						@endif
					</td>
				</tr>
				@endforeach()
			</tbody>
		</table>
		{{$cats->links()}}
	</div>
@stop()