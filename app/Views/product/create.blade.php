@extends('layouts.backend')

@section('title','Sản phẩm')
@section('title2','/ Thêm mới sản phẩm')
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
						<input type="text" class="form-control" name="name" id="name" placeholder="Mời nhập tên sản phẩm">
						@if($errors->has('name'))
						<div class="help-block" style="color: red">
							{!!$errors->first('name')!!}
						</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">Nội dung</label>
						<textarea name="description" id="description" class="form-control"></textarea>
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
								<select name="type" id="type" class="form-control">
									<option value="">--Chọn kiểu--</option>
									<option value="1">Sản phẩm mới</option>
									<option value="2">Sản phẩm khuyến mãi</option>
									<option value="3">Sản phẩm</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Trạng thái</label>
								<select name="status" id="status" class="form-control">
									<option value="">--Trạng thái--</option>
									<option value="1">Hiển thị</option>
									<option value="2">Không hiển thị</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
							<label for="">Danh mục</label>
							<select name="category_id" id="category_id" class="form-control" required="" >
								<option value="">--Chọn danh mục--</option>
								@foreach($cats as $c)
								<option value="{!!$c->id!!}">{!!$c->name!!}</option>
								@endforeach()
							</select>
						</div>
					<div class="form-group">
						<label for="">Giá</label>
						<input type="text" class="form-control" name="price" id="price" placeholder="Mời nhập giá">
					</div>
					<div class="form-group">
						<label for="">Giá khuyến mãi</label>
						<input type="text" class="form-control" name="price_sale" id="price_sale" placeholder="Mời nhập giá khuyến mãi" >
					</div>
					<div class="form-group">
						<label for="">Ngày đăng</label>
						<input type="date" class="form-control" name="created_at" id="created_at" value="{!!date("Y-m-d")!!}" >
					</div>


					
					<div class="form-group">
						<label for="">Hình ảnh</label>
						<input type="file" name="file">
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