@extends('layouts.backend')
@section('title','Danh mục ')
@section('title2',' /Thêm mới danh mục')
@section('backend')
	<!-- Button trigger modal -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Thông tin danh mục</h3>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="">Tên danh mục</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Mời nhập tên">
					@if($errors->has('name'))
					<div class="help-block" style="color: red">
						{!!$errors->first('name')!!}
					</div>
					@endif
				</div>
			
				<div class="form-group">
					<label for="">Danh mục cha</label>
					<select name="parent" id="inputParent" class="form-control">
						<option value="">---Chon danh mục--</option>
						<option value="1">Danh mục cha 1</option>
						<option value="2">Danh mục cha 2</option>
						<option value="3">Danh mục cha 3</option>
					</select>
				</div>

				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="inputParent" class="form-control">
						<option value="1">--Trạng thái--</option>
						<option value="1">Hiển thị</option>
						<option value="2">Không hiển thị</option>
					</select>
				</div>
			
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			</form>
		</div>
	</div>
	   
@stop()