@extends('layouts.frontend')

@section('frontend')
	<!-- END MENU -->
@if($cart->items)
	<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
					<div class="breadcrumb-title"><b>Giỏ hàng</b></div>				
					
					<ul class="breadcrumb">	

						<li class="home">
							<a  href="/" ><span >Trang chủ</span></a>						
							<span> / </span>
						</li>
						
						<li><strong >Giỏ hàng</strong></li>
						
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
		<section class="main-cart">
			<div class="header-cart">
				<div class="title-cart">
					<h3>
						Giỏ hàng của bạn có
						<span class="count-cart">{{count($cart->items)}}</span>
						sản phẩm
						<li class="fa fa-caret-right"></li>
					</h3>
				</div>
			</div>

		</section>
		<div class="form-cart">
			<div class="bg-cart">
				<div class="row-cart">
					<div style="width: 5%">STT</div>
					<div style="width: 20%">Tên sản phẩm</div>
					<div style="width: 25%">Ảnh sản phẩm</div>
					<div style="width: 14%">Đơn giá</div>
					<div style="width: 16%">Số lượng</div>
					<div style="width: 14%">Thành tiền</div>
					<div style="width: 6%">Xóa</div>
				</div>
				@php
					$n = 0;
					$tong = 0;
				@endphp
				@if(count($cart->items))
					@foreach($cart->items as $item)
					@php
						if($item['price_sale']){
							$total = $item['price_sale']*$item['quantity'];
						}
						else{
							$total = $item['price']*$item['quantity'];
						}
					@endphp
					<div class="row-cart2">
						<div style="width: 5%">{{$n+=1}}</div>
						<div style="width: 20%">{{$item['name']}}</div>
						<div style="width: 25%"><img src="{{url('uploads/product')}}/{{$item['image']}}" width="150" alt=""></div>
						<div style="width: 14%">
						@if($item['price_sale'])
							{{number_format($item['price_sale'])}}₫
						@else
							{{number_format($item['price'])}}₫
						@endif
						</div>
						<div style="width: 16%">
							<form action="{{route('update-cart')}}" style="margin-bottom: 0px;">
								<input type="hidden" name="id" value="{{$item['id']}}">
								<input type="text" value="{{$item['quantity']}}" name="quantity" style="width: 65px;text-align: center;">
										<!-- <div class="custom custom-btn-number">
											<span class="qtyminus" data-field="quantity">-</span>
											<input type="text" class="input-text qty" data-field="quantity" title="Só lượng" value="{{$item['quantity']}}" maxlength="12" id="qty" name="quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == '')this.value=1;">		

											<span class="qtyplus" data-field="quantity">+</span>
										</div> -->
								 <button type="submit" class="label label-success" style="height: 35px;border: none">Cập nhật</button>
							</form>
						</div>
						<div style="width: 14%">
						{{number_format($total)}}₫							
						</div>
						<div style="width: 6%">
							<a href="{{route('delete-cart',['id' => $item['id']])}}" title="" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"><i class="fa fa-trash" style="color: #1097cf;font-size: 30px;" title="Xóa"></i></a>
						</div>
					</div>
					@endforeach()
				@endif
			</div>
		</div>
		<div class="cart-total">
			<div class="row">
				@if($cart->items)
				@if(Auth::guest())
				<div class="col-md-6">
					<div class="form-inline" style="padding:30px 30px">
						<label style="color: #636363;">Phương thức thanh toán:</label>
						<select name="paycod" id="inputPay_cod" class="form-control" required="required">
							<option value="cod">Thanh toán khi giao hàng(COD)</option>
							<option value="paypal">Thanh toán trực tuyến(Paypal)</option>
						</select>
					</div>
				</div>
				<div class="total col-md-6">
					<div class="special-price">
						<label style="color: #636363; margin-right: 10px;">Tổng tiền thanh toán:</label>
						<span class="price">{{number_format($cart->total())}}₫</span>
					</div>
				</div>
			</div>
		</div>
		<div class="check-out">
			<div class="c-right">
				<a href="{{route('frontend.home')}}" class="btn btn-white" style="color: #1097cf">Tiếp tục mua hàng</a>
				<a href="{{route('clear-cart')}}" class="btn btn-white" style="color: #1097cf" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')">Xóa giỏ hàng</a>
				<a href="{{route('frontend.order')}}" class="btn btn-black" >Thanh toán</a>
				</div>
			</div>
		</div>
		@else
		<form method="GET" action="{{route('frontend.order')}}">
			<div class="col-md-6">
				<div class="form-inline" style="padding:30px 30px">
					<label style="color: #636363;">Phương thức thanh toán:</label>
					<select name="paycod" id="inputPay_cod" class="form-control" required="required">
						<option value="">--Lựa chọn--</option>
						<option value="cod">Thanh toán khi giao hàng(COD)</option>
						<option value="paypal">Thanh toán trực tuyến(Paypal)</option>
					</select>
				</div>
			</div>
			<div class="total col-md-6">
				<div class="special-price">
					<label style="color: #636363; margin-right: 10px;">Tổng tiền thanh toán:</label>
					<span class="price">{{number_format($cart->total())}} VNĐ</span>
				</div>
			</div>
			</div>
			</div>
				<div class="check-out">
					<div class="c-right">
						<a href="{{route('frontend.home')}}" class="btn btn-white" >Tiếp tục mua hàng</a>
						<a href="{{route('clear-cart')}}" class="btn btn-white" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')">Xóa giỏ hàng</a>
						<button type="submit" class="btn btn-black" >Thanh toán</button>
					</div>
				</div>
			</div>
		</form>
		@endif
		@endif
@else
	<div class="container">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Giỏ hàng trống !</strong> Mời bạn quay lại trang chủ mua hàng.
		</div>
	</div>

@endif
@stop()