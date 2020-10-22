@extends('layouts.backend')

@section('title','Sản phẩm')
@section('backend')
	<a href="{{route('backend.product-create')}}" title="" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
	<div class="text-center">
		<table class="table table-hover table-bordered" style="margin-top: 20px;">
			<thead>
				<tr style="background-color: #f5f5f5">
					<th class="text-center">ID</th>
					<th class="text-center">Tên sản phẩm</th>
					<th class="text-center">Ảnh</th>
					<th class="text-center">Giá</th>
					<th class="text-center">Giá KM</th>
					<th class="text-center">Chức năng</th>
				</tr>
			</thead>
			<tbody>
				@foreach($product as $pro)
				<tr>
					<td>{!!$pro->id!!}</td>
					<td>{!!$pro->name!!}</td>
					<td>
						<img src="{!!url('/uploads/product')!!}/{!!$pro->image!!}" alt="" width="100">
					</td>
					<td>{!!number_format($pro->price)!!} VNĐ</td>
					<td>{!!number_format($pro->price_sale)!!} VNĐ</td>
					<td width="300px">
						<a href="{!!route('backend.product-show',['id' => $pro->id])!!}" title="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Chi tiết</a>
						<a href="{!!route('backend.product-edit',['id' => $pro->id])!!}" title="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Sửa</a>
						<a href="{!!route('backend.product-delete',['id' => $pro->id])!!}" title="" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	{!!$product->links()!!}
	</div>
@stop()