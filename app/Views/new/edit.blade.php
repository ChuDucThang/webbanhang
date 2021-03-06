@extends('layouts.backend')
@section('title','Tin tức' )
@section('title2',' / Chỉnh sửa tin tức')
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
					<input type="text" class="form-control" name="title" id="title" value="{!!$news->title!!}" >
				</div>
				<div class="form-group">
					<label for="">Hình ảnh</label>
					<input type="file" name="file">
					<div class="thumbnail" >
							<img src="{{url('uploads/news')}}/{!!$news->image!!}" alt="" width="200">
						</div>
				</div>
				<div class="form-group">
					<label for="">Tóm tắt</label>
					<textarea name="description" id="inputDescription" class="form-control" rows="3">{!!$news->description!!}</textarea>
				</div>
				<div class="form-group">
					<label for="">Nội dung</label>
					<textarea name="content" id="content" class="form-control">{!!$news->content!!}</textarea>
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
					<select name="status" id="" class="form-control" required="required">
						<option value="1" @if($news->status == 1) selected @endif>Hiển thị</option>
						<option value="2" @if($news->status == 2) selected @endif>Không hiển thị</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>
					<input type="date" name="created_at" class="form-control" value="{!!$news->created_at!!}">
				</div>

				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			</form>
		</div>
	</div>
@stop()