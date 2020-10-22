@extends('layouts.backend')
@section('title','Banner ')
@section('title2',' / Thêm mới banner')
@section('backend')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Thông tin banner</h3>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="">Tên banner</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên banner">
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
					<label for="">Trạng thái</label>
					<select name="status" id="" class="form-control" required="required">
						<option value="1">Hiển thị</option>
						<option value="2">Không hiển thị</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			</form>
		</div>
	</div>
@stop()