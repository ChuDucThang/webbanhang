@extends('layouts.frontend')

@section('frontend')
	<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>Giới thiệu</b></div>
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="{{route('frontend.home')}}" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					<li><strong >Giới thiệu</strong></li>
				</ul>
			</div>
		</div>
	</div>
</section>
	<div class="container">
		<h1>Liên hệ với chúng tôi</h1>
	</div>
@stop()