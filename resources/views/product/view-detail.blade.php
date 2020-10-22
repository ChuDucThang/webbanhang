@extends('layouts.frontend')

@section('frontend')
	<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>{{$product_detail->name}}</b></div>
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="{{route('frontend.home')}}}" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					
					
					<li>
						<a  href="{{route('frontend.product',['id'=>$cat_name->id])}}"><span>{{$cat_name->name}}</span></a>						
						<span> / </span>
					</li>
					
					<li><strong><span >{{$product_detail->name}}</span></strong><li>
					
				</ul>
			</div>
		</div>
	</div>
</section>


<section class="product">
	<meta itemprop="name" content="{{$product_detail->name}}">
	<div class="container">
		<div class="row">

			<div class="col-lg-12">
				<div class="details-product">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-5">
							<div class="large-image">
								<a href="{{url('uploads/product')}}/{{$product_detail->image}}">
									<img id="zoom_01" src="{{url('uploads/product')}}/{{$product_detail->image}}" alt="ĐỒNG HỒ LEMANS">
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 details-pro">
							<h1 class="title-head">{{$product_detail->name}}</h1>
							<div class="reviews clearfix">
								<div class="f-left margin-right-10">
									<div class="bizweb-product-reviews-badge" data-id="13395962"></div>
								</div>

							</div>
							<div class="price-box clearfix">								
								<div class="special-price"><span class="price product-price" >{!!number_format($product_detail->price)!!}₫</span> </div> <!-- Giá -->	
							</div>
							<div class="status2 clearfix">
								<p>
									<b>Trạng thái:</b> 
									<span class="inventory">	
										Còn hàng	
									</span>
								</p>
							</div>						
							<div class="product-summary product_description margin-bottom-15">
								<div class="rte description">
									     Đồng hồ đeo tay nam dần trở thành xu hướng cho phái mạnh. Thật sự cách biệt khi so sánh 1 người đeo đồng hồ và 1 người không đeo đồng hồ bởi sự...				
								</div>
							</div>
							

							<div class="form-product ">
								<form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form-inline margin-bottom-10 dqdt-form">


									
									<div class="box-variant clearfix ">

										
										<input type="hidden" name="variantId" value="22261001" />
										

									</div>
									<div class="form-group form-groupx form-detail-action clearfix ">

										
										<label class="f-left">Số lượng: </label>
										<div class="custom custom-btn-number">
											<span class="qtyminus" data-field="quantity">-</span>
											<input type="text" class="input-text qty" data-field="quantity" title="Só lượng" value="1" maxlength="12" id="qty" name="quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == '')this.value=1;">		

											<span class="qtyplus" data-field="quantity">+</span>
										</div>
										
										
										<a href="{{route('add-cart',['id'=>$product_detail->id])}}" class="btn btn-lg btn-primary btn-cart btn-cart2 add_to_cart btn_buy add_to_cart" title="Cho vào giỏ hàng">
											<span> Thêm vào giỏ hàng <i class="fa .fa-caret-right"></i></span>
										</a>
										

									</div>
								</form>

								
								
							</div>

						</div>
					</div>
					<div class="row">
						
						<div class="col-xs-12 col-lg-12 margin-top-15 margin-bottom-30">
							<!-- Nav tabs -->
							<div class="product-tab e-tabs">

								<ul class="tabs tabs-title clearfix">
									
									<li class="tab-link" data-tab="tab-1">
										<h3><span>Mô tả</span></h3>
									</li>
									
									
									<li class="tab-link" data-tab="tab-2">
										<h3><span>Thông tin</span></h3>
									</li>
									
									
									<li class="tab-link" data-tab="tab-3">
										<h3><span>Đánh giá</span></h3>
									</li>
									

								</ul>
								
								<div  class="tab-1 tab-content">
									<div class="rte">
										
										<h2 itemprop="name">&nbsp; &nbsp;</h2>
<p>Đồng hồ đeo tay nam dần trở thành xu hướng cho phái mạnh. Thật sự cách biệt khi so sánh 1 người đeo đồng hồ và 1 người không đeo đồng hồ bởi sự sang trọng, lịch lãm, cuốn hút mà chúng mang lại. Tuy nhiên, để chọn được một chiếc đồng hồ phù hợp không hề dễ dàng. Việc đeo đồng hồ không phù hợp có thể làm anh em trông khá phản cảm thậm chí là chọn nhầm một chiếc đồng hồ fake, kém chất lượng. Bài viết sau đây là chia sẻ của ShopWatch về cách chọn đồng hồ đeo tay nam đẹp, phù hợp.</p>
<table border="1" cellpadding="3" width="100%">
<tbody>
<tr valign="top">
	<td width="40%">THƯƠNG HIỆU:</td>
	<td>Enicar</td>
</tr>
<tr valign="top">
	<td width="40%">MÃ SẢN PHẨM:</td>
	<td>3168/50/351AA</td>
</tr>
<tr valign="top">
	<td width="40%">GIỚI TÍNH:</td>
	<td>Nam</td>
</tr>
<tr valign="top">
	<td width="40%">XUẤT XỨ:</td>
	<td>
	<p>Thụy Sĩ</p></td>
</tr>
<tr valign="top">
	<td width="40%">LOẠI ĐỒNG HỒ:</td>
	<td>
	<p>Đồng hồ cơ</p></td>
</tr>
</tbody></table>
<p>Trong quá trình sử dụng, nếu phát hiện bất kỳ hiện tượng không bình thường, Quý khách cần liên hệ hoặc mang đồng hồ đến ngay các Trung tâm kỹ thuật và bảo hành của Công ty để được tư vấn và kiểm tra.</p>
<p>Phạm vi bảo hành đồng hồ bao gồm các lỗi kỹ thuật về máy ( như đồng hồ không chạy, chạy không chính xác), độ chịu nước và pin đồng hồ). Các trường hợp không bảo hành đồng hồ gồm các lỗi về vỏ và dây của đồng hồ; các lỗi rơi vỡ, va đập làm xước kính trong quá trình khách hàng sử dụng gây nên; dây da gặp vấn đề; không bảo hành cho trường hợp điều chỉnh, sử dụng không đúng cách của người dùng; không bảo hành cho đồng hồ đã sửa chữa tại những nơi không phải là trung tâm bảo hành của công ty.</p>
										
									</div>
								</div>
								
								
								<div  class="tab-2 tab-content">
									<div class="manh item-tabs">
										Các nội dung Hướng dẫn mua hàng viết ở đây
									</div>
								</div>
								
								
								<div class="tab-3 tab-content">
									<div id="bizweb-product-reviews" class="bizweb-product-reviews" data-id="13395962">
    
</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
					
					
					
					<div class="section related-product margin-top-20">					
						<div class="section-title a-center">
							<h2>Sản phẩm liên quan</h2>

						</div>
						<div class="section-content">
							<div class="products  owl-carousel owl-theme products-view-grid" data-lgg-items="4" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xss-items="2" data-margin="30">
								
								
								




 




		   
		   
		   

@foreach($otherProduct as $op)

<div class="product-box">															
	<div class="product-thumbnail">	
		<a href="{!! url('uploads/product') !!}/{!! $op->image !!}" title="{{$op->name}}">
			<img src="{!! url('uploads/product') !!}/{!! $op->image !!}"  data-lazyload="{!! url('uploads/product') !!}/{!! $op->image !!}" alt="{{$op->name}}">
		</a>	

		
		<div class="product-action hidden-md hidden-sm hidden-xs clearfix">
			<form action="/cart/add" method="post" class="variants form-nut-grid margin-bottom-0" data-id="product-actions-13395964" enctype="multipart/form-data">
				<div>
					
					<input class="hidden" type="hidden" name="variantId" value="22261010" />
					<button class="btn-cart btn btn-primary  left-to" title="Chọn sản phẩm"  type="button" onclick="window.location.href='/dong-ho-dress'" >
						<i class="fa fa-gear"></i>
					</button>
					
					
					<a href="/dong-ho-dress" data-handle="dong-ho-dress" class="btn-gray btn_view btn right-to quick-view" title="Xem nhanh">
						<i class="fa fa-eye"></i></a>
					
				</div>
			</form>
		</div>
	</div>
	<div class="product-info a-center">
		<h3 class="product-name"><a href="{!!route('frontend.product_detail',['id' => $op->id])!!}" title="{{$op->name}}">{{$op->name}}</a></h3>
		
		
		<div class="price-box clearfix">
			<div class="special-price">
				{{number_format($op->price)}}₫
			</div>											
		</div>
		
		
	</div>

</div>
												
								
@endforeach								
								
								
							</div>
						</div>
					</div>
					





				</div>
			</div>

		</div>
	</div>

</section>

@stop()