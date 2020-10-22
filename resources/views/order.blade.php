
@if($_GET['paycod']=='cod')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thông tin thanh toán</title>
	<link rel="icon" href="{!!url('public/images/frontend.ico')!!}" alt="logo" width="100%">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="{!! asset('/public/frontend/css/style.css') !!}"/>
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/cart.css">
</head>
<body>
<form action="" method="POST">
	<div class="wrap">
		<div class="row">
			<div class="ma col-md-8">
				<div class="ma-header">
					<h2>Thông tin thanh toán</h2>
				</div>
				<div class="ma-content">
					<div class="row">
						<div class="col-md-6 col-xs-6 col-sm-6">
							<div class="ma-title">
								<h4>Khách hàng</h3>
							</div>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="">Họ tên</label>
								<input type="text" class="form-control" name="username" id="username" placeholder="Họ và tên">
							</div>
							<div class="form-group">
								<label for="">Số điện thoại</label>
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại">
							</div>
							<div class="form-group">
								<label for="">Địa chỉ</label>
								<input type="text" class="form-control" name="address" id="address" placeholder="Địa chỉ">
							</div>
							<div class="form-group">
								<label for="">Ghi chú</label>
								<textarea name="order_note" id="input" class="form-control" rows="5" required="required"></textarea>
							</div>
						</div>
						<div class="col-md-6 col-xs-6 col-sm-6">
							<div class="ma-title">
								<h4>Vận chuyển</h3>
							</div>
							<div class="section-content">
								<div class="content-box">
									<div class="radio-input">
										<input class="input-radio" type="radio" name="" value="" placeholder="">
										<label>
											<span class="label-s">Giao hàng tận nơi</span>
											<span class="label-p">40.000₫</span>
										</label>
									</div>
								</div>
							</div>
							<div class="ma-title">
								<h4 style="margin-top: 40px;">Thanh toán</h3>
							</div>
							<div class="content-box">
									<div class="radio-input">
										<input class="input-radio" type="radio" name="" value="" placeholder="">
										<label>
											<span class="label-s">Thanh toán khi giao hàng</span>
											<span class="label-p">COD</span>
										</label>
									</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="full-width" style="margin-top: 40px;margin-left: 0px;">
			</div>
			@if(count($cart->items))
			<div class="sidebar-p col-md-4">
				<div class="sidebar-header">
					<h4>
						<label>Đơn hàng ({{count($cart->items)}} sản phẩm)</label>
					</h4>
					<hr class="full-width">
				</div>

				<div class="sidebar-content">
					@foreach($cart->items as $item)
					<hr class="full-width">
						@php
							if($item['price_sale']){
								$total = $item['price_sale']*$item['quantity'];
							}
							else{
								$total = $item['price']*$item['quantity'];
							}
						@endphp
					<div class="sidebar-body">
						<table class="sidebar-table">
							<tbody>
								<tr>
									<td class="sidebar-product">
										<div class="sidebar-thumbnail">
											<div class="thumbnail-wrapper">
												<img src="{{url('uploads/product')}}/{{$item['image']}}" alt="" class="thumbnail-img">
											</div>
											<div class="thumbnail-quantity">{{$item['quantity']}}</div>
										</div>
									</td>
									<td>
										<div class="sidebar-info">
											<div class="sidebar-name">
												{{$item['name']}}
											</div>
										</div>
									</td>
									<td>
										<div class="sidebar-price right">
											{{number_format($total)}} VNĐ
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					@endforeach
					<hr class="mo">
					<div class="sidebar-body">
						<div class="sidebar-total">
							<span class="pull-left">Thành tiền</span>
							<span class="pull-right" style="padding-right: 80px;">{{number_format($cart->total())}} VNĐ</span>
						</div>
					</div>
					<div class="sidebar-body" style="margin: 10px 0px 20px 0px;">
						<div class="sidebar-total">
							<span class="pull-left">Phí vận chuyển</span>
							<span class="pull-right" style="padding-right: 80px;">40,000 VNĐ</span>
						</div>
					</div>
					<hr class="mo">
					<div class="sidebar-body" >
						<div class="sidebar-total">
							<span class="pull-left">Tổng tiền</span>
							<span class="pull-right" style="padding-right: 80px;">{{number_format($cart->total() + 40000)}} VNĐ</span>
						</div>
					</div>
					<div class="sidebar-body" >
						<div class="sidebar-total" style="margin-bottom: 400px;">
							<span class="pull-left" style="margin-top: 45px;font-size: 17px;"><a href="{{route('view-cart')}}" title=""><i class="fa fa-angle-left" style="color: blue;"></i> Quay lại giỏ hàng</a></span>
							<span class="pull-right" style="padding-right: 80px;">
								<button type="submit" class="btn btn-new" style="width: 140px;margin-top: 40px;margin-left: 0px;">Đặt hàng</button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>  
</form>
</body>
</html>
@else
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/bootstrap.min.css">
	<div class="container">
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <div class="col-md-4">
            	<div class="form-group">
            		<label>Tên khách hàng</label>
            		<input type="text" class="form-control text-center" id="" value="{{ Auth::user()->name }}" disabled="disabled">
            	</div>
            </div>
            <div class="col-md-4">
            	<div class="form-group">
            		<label>Điện thoại liên hệ</label>
            		<input type="text" class="form-control text-center" id="" value="{{ Auth::user()->phone }}" disabled="disabled">
            	</div>
            </div>
            <div class="col-md-4">
            	<div class="form-group">
            		<label>Địa chỉ</label>
            		<input type="text" class="form-control text-center" id="" value="{{ Auth::user()->address }}" disabled="disabled">
            	</div>
            </div>
            <div class="text-center" style="margin-top: 50px;">
            	              
            	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="upload" value="5">
				<input type="hidden" name="business" value="alientk95@gmail.com">

				@foreach($cart->items as $item)
				@php
					if($item['price_sale']){
						$total = $item['price_sale']*$item['quantity'];
					}
					else{
						$total = $item['price']*$item['quantity'];
					}
				@endphp
				<input type="hidden" name="item_name_1" value="{{$item['name']}}">
				<input type="hidden" name="amount_1" value="{{$item['quantity']}}">
				<input type="hidden" name="shipping_1" value="{{number_format($total)}}">
				@endforeach

				<input type="submit" class="btn btn-danger" value="Thanh toán PayPal">
				</form>

				<a href="{{route('view-cart')}}" title="" class="btn btn-success">Trở về</a>
	            </div> 

          
	</div>
@endif