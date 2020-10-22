@extends('layouts.backend')
@section('title','Tin tức ')
@section('title2',' / Thêm mới tin tức')
@section('backend')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Thông tin tin tức</h3>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="">Tiêu đề</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="Nhập tiêu đề tin">
					@if($errors->has('name'))
						<div class="help-block" style="color: red">
							{!!$errors->first('name')!!}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Hình ảnh</label>
					<input type="file" name="file">
				</div>
				<div class="form-group">
					<label for="">Tóm tắt</label>
					<textarea name="description" id="inputDescription" class="form-control" rows="3" required="required"></textarea>
				</div>
				<div class="form-group">
					<label for="">Nôi dung</label>
					<textarea name="content" id="content" class="form-control"></textarea>
						<script type="text/javascript">
											var editor = CKEDITOR.replace('content',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="status" class="form-control" required>
						<option value="">--Trạng thái--</option>
						<option value="1">Hiển thị</option>
						<option value="2">Không hiển thị</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Ngày đăng</label>
					<input type="date" name="created_at" class="form-control" value="{!!date('Y-m-d')!!}">
				</div>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			</form>
		</div>
	</div>
@stop()