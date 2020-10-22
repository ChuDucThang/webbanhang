@extends('layouts.backend')
@section('title','Tin tức')
@section('backend')

	<a href="{{route('backend.new-add')}}" title="" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
	<div class="text-center">
		<table class="table table-hover table-bordered" style="margin-top: 20px;">
			<thead>
				<tr style="background-color: #f5f5f5">
					<th class="text-center">ID</th>
					<th class="text-center">Tiêu đề</th>
					<th class="text-center">Hình ảnh</th>
					<th class="text-center">Trạng thái</th>
					<th class="text-center">Chức năng</th>
				</tr>
			</thead>
			<tbody>
				@foreach($news as $n)
				<tr>
					<td>{!!$n->id!!}</td>
					<td>{!!$n->title!!}</td>
					<td>
						<img src="{!!url('/uploads/news')!!}/{!!$n->image!!}" alt="" width="100">
					</td>
					<td>
						@if($n->status==1)
							Hiển thị
						@else
							Không hiển thị
						@endif
					</td>
					<td>
						<a href="{!!route('backend.new-edit',['id' => $n->id])!!}" title="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Sửa</a>
						<a href="{!!route('backend.new-delete',['id' => $n->id])!!}" title="" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
@stop()