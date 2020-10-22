@extends('layouts.frontend')

@section('frontend')
	<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>Liên hệ</b></div>
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="{{route('frontend.home')}}" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					
					
					<li><strong >Liên hệ</strong></li>
					
					
				</ul>
			</div>
		</div>
	</div>
</section>
	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="container">
				<div id="map" style="height:500px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6635.65425357508!2d105.80840716702387!3d21.02727721589305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6ea403534b%3A0x3e2402d12b36db69!2zMTU0IE5ndXnhu4VuIENow60gVGhhbmgsIE5n4buNYyBLaMOhbmgsIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1528378066766" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="contact">
				<h2>Contact</h2>
			</div>
			<form action="" method="POST" role="form">
			<input type="hidden" name="_token" value="{!!csrf_token()!!}">
				<div class="form-group">
					<label for="">Tên</label>
					<input type="text" name="name" class="form-control" id="">
				</div>
			
				<div class="form-group">
					<label for="">Nội dung</label>
					<textarea name="mess" class="form-control"></textarea>
				</div>
			
				<button type="submit" class="btn btn-primary">Gửi</button>
			</form>		
		</div>
	</div>
	</div>

@stop()