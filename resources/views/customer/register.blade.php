@extends('layouts.frontend')

@section('frontend')

<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>Đăng ký tài khoản</b></div>				
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="{route('frontend.home'){}}" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					
					<li><strong >Đăng ký tài khoản</strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section> 

	<div class="container">
		@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('success')}}
			</div>
		@endif
		<div class="res-title">
			<h4>ĐĂNG KÝ TÀI KHOẢN</h4>
		</div>
		<form action="" method="POST">
			<div class="row">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Tên <span style="color: red;">*</span></label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Mời nhập tên">
						@if($errors->has('name'))
						<div class="help-block" style="color: red">
							{!!$errors->first('name')!!}
						</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">Mật khẩu <span style="color: red;">*</span></label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Mời nhập nhập mật khẩu">
						@if($errors->has('password'))
						<div class="help-block" style="color: red">
							{!!$errors->first('password')!!}
						</div>
						@endif
					</div>

					<div class="form-group">
						<label for="">Nhập lại mật khẩu <span style="color: red;">*</span></label>
						<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Mời nhập mật khẩu">
						@if($errors->has('password_confirmation'))
						<div class="help-block" style="color: red">
							{!!$errors->first('password_confirmation')!!}
						</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">Số điện thoại <span style="color: red;">*</span></label>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Mời nhập số điện thoại">
						@if($errors->has('phone'))
						<div class="help-block" style="color: red">
							{!!$errors->first('phone')!!}
						</div>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Tên đầy đủ <span style="color: red;">*</span></label>
						<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Mời nhập tên đầy đủ">
						@if($errors->has('full_name'))
						<div class="help-block" style="color: red">
							{!!$errors->first('full_name')!!}
						</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">Email <span style="color: red;">*</span></label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Mời nhập email">
						@if($errors->has('email'))
						<div class="help-block" style="color: red">
							{!!$errors->first('email')!!}
						</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">Địa chỉ <span style="color: red;">*</span></label>
						<input type="text" class="form-control" name="address" id="address" placeholder="Mời nhập địa chỉ">
						@if($errors->has('adrress'))
						<div class="help-block" style="color: red">
							{!!$errors->first('address')!!}
						</div>
						@endif
					</div>
					<div style="margin-top: 35px;">
						<label for="">Giới tính <span style="color: red;">*</span></label>
						<div class="radio">
							<label>
								<input type="radio" name="gender" id="input" value="1" checked="checked">
								Nam
							</label>
							<label>
								<input type="radio" name="gender" id="input" value="2">
								Nữ
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-new" style="width: 100px;margin-left: 0px;float: left;">Đăng ký</button>
					<div style="margin-top: 30px;margin-bottom: 20px;">
						<span style="margin-left: 20px;">Nếu có tài khoản <a href="{{route('frontend.login')}}" title="" class="label label-primary" >Đăng nhập</a></span>
					</div>

				</div>
			</div>
		</form>
	</div>
@stop