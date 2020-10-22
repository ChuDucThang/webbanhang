@extends('layouts.frontend')

@section('frontend')

<section class="bread-crumb" style="background-image:url(//bizweb.dktcdn.net/100/341/634/themes/713511/assets/breadcrum_bg1.jpg?1554043361037);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>Đăng nhập tài khoản</b></div>				
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="/" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					
					<li><strong >Đăng nhập tài khoản</strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section> 

<div class="container">
	<h1 class="title-head"><span>Đăng nhập tài khoản</span></h1>
	<div class="row">
		<div class="col-lg-6">
			<div class="page-login margin-bottom-30">
				<div id="login">

					<span>
						Nếu bạn đã có tài khoản, đăng nhập tại đây.
					</span>
					<form accept-charset="UTF-8" id="customer_login" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-signup clearfix">
						<fieldset class="form-group">
							<label>Email: </label>
							<input type="email" class="form-control form-control-lg" value="" name="email" id="email" placeholder="Mời nhập email">
							@if($errors->has('email'))
							<div class="help-block" style="color: red">
								{!!$errors->first('email')!!}
							</div>
							@endif
						</fieldset>
						<fieldset class="form-group">
							<label>Mật khẩu: </label>
							<input type="password" class="form-control form-control-lg" value="" name="password" id="password" placeholder="Mật khẩu">
							@if($errors->has('password'))
							<div class="help-block" style="color: red">
								{!!$errors->first('password')!!}
							</div>
							@endif
						</fieldset>



						<div class="pull-xs-left" style="margin-top: 25px;">
							<input class="btn btn-primary"  type="submit" value="Đăng nhập" />
							<a href="/account/register" class="btn-link-style btn-register" style="margin-left: 20px;text-decoration: underline; ">Đăng ký</a>
						</div>
					</div>
					</form>
				</div>


			</div>
		</div>
		<div class="col-lg-6">
			<div id="recover-password"  class="form-signup">
				<span>
					Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
				</span>					
				<form accept-charset="UTF-8" action="/account/recover" id="recover_customer_password" method="post">
<input name="FormType" type="hidden" value="recover_customer_password" />
<input name="utf8" type="hidden" value="true" />
				
				
				<div class="form-signup clearfix">
					<fieldset class="form-group">
						<label>Email: </label>
						<input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Email">
					</fieldset>
				</div>
				<div class="action_bottom">
					<input class="btn btn-primary" style="margin-top: 25px;" type="submit" value="Lấy lại mật khẩu" />

				</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop