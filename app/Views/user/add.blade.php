@extends('layouts.backend')
@section('title','Quan trị ')
@section('title2',' / Thêm tài khoản')
@section('backend')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Thông tin tài khoản</h3>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="">Tên tài khoản</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên tài khoản">
					@if($errors->has('name'))
					<div class="help-block" style="color: red">
						{!!$errors->first('name')!!}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
					@if($errors->has('email'))
					<div class="help-block" style="color: red">
						{!!$errors->first('email')!!}
					</div>
					@endif
				</div>

				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Nhập email">
					@if($errors->has('password'))
					<div class="help-block" style="color: red">
						{!!$errors->first('password')!!}
					</div>
					@endif
				</div>

				<div class="form-group">
					<label for="">Level</label>
					<input type="number" class="form-control" name="level" id="level">
					@if($errors->has('level'))
					<div class="help-block" style="color: red">
						{!!$errors->first('level')!!}
					</div>
					@endif
				</div>

				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			</form>
		</div>
	</div>
@stop()