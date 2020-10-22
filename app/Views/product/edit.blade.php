@extends('layouts.backend')

@section('title','Sản phẩm')
@section('title2','/ Sửa sản phẩm')
@section('backend')

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Thông tin sản phẩm</h3>
	</div>
	<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="">Tên sản phẩm</label>
						<input type="text" class="form-control" name="name" id="name" value="{{$pro->name}}">
					</div>
					<div class="form-group">
						<label for="">Nội dung</label>
						<textarea name="description" id="description" class="form-control">{{$pro->description}}</textarea>
						<script type="text/javascript">
											var editor = CKEDITOR.replace('description',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
							
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Kiểu sản phẩm</label>
								<select name="type" id="type" class="form-control" required="required">
									<option value="">--Chọn kiểu--</option>
									<option value="1" @if($pro->type == 1) selected @endif>Sản phẩm mới</option>
									<option value="2" @if($pro->type == 2) selected @endif>Sản phẩm khuyến mãi</option>
									<option value="3" @if($pro->type == 3) selected @endif>Sản phẩm</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Trạng thái</label>
								<select name="status" id="status" class="form-control" required="required">
									<option value="">--Trạng thái--</option>
									<option value="1" @if($pro->status == 1) selected @endif>Hiển thị</option>
									<option value="2" @if($pro->status == 2) selected @endif>Không hiển thị</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
							<label for="">Danh mục</label>
							<select name="category_id" id="category_id" class="form-control" required="required">
								<option value="">--Chọn danh mục--</option>
								@foreach($cats as $c)
								@php
									$selected = $c->id == $pro->category_id ? 'selected' : '';
								@endphp
								<option value="{!!$c->id!!}" {!!$selected!!}>{!!$c->name!!}</option>
								@endforeach()
							</select>
						</div>
					<div class="form-group">
						<label for="">Giá</label>
						<input type="text" class="form-control" name="price" id="price" value="{{$pro->price}}">
					</div>
					<div class="form-group">
						<label for="">Giá khuyến mãi</label>
						<input type="text" class="form-control" name="price_sale" id="price_sale" value="{{$pro->price_sale}}">
					</div>
					<div class="form-group">
						<label for="">Ngày đăng</label>
						<input type="date" class="form-control" name="created_at" id="created_at" value="{{date('Y-m-d')}}" >
					</div>


					
					<div class="form-group">
						<label for="">Hình ảnh</label>
						<input type="file" name="file">
						<div class="thumbnail" >
							<img src="{{url('uploads/product')}}/{!!$pro->image!!}" alt="" width="400">
						</div>
					</div>
					<div class="text-center" style="margin-top: 60px">
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
					</div>
				</div>
			</div>
				
			</form>
			
		</div>
	</div>

	
@stop()