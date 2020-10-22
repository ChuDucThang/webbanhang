@extends('layouts.frontend')

@section('frontend')

<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>Tìm kiếm</b></div>
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="{{route('frontend.home')}}" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					<li><strong>Kết quả tìm kiếm</strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section> 
@if(count($product) > 0)
<section class="signup search-main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2><a href="#" class="title-box">Nhập từ khóa tìm kiếm </a></h2>
			</div>
			<div class="col-xs-12">
				<form action="{{route('frontend.search')}}" method="get" class="form-signup">
					
					<fieldset class="form-group">
						<input type="text" name="key" value="" placeholder="Tìm kiếm ..." class="form-control" style="width:300px; float:left;     line-height: 2.1;"  >
						<button type="submit" class="btn btn-primary" style="height: 45px;">Tìm kiếm</button>
					</fieldset>
				</form>  
			</div>
			     
			        
			
			<div class="col-xs-12">
				<h2 class="title-head">Có ({{count($product)}}) kết quả tìm kiếm phù hợp</h2>

			</div>
			<div class="col-xs-12">
				<div class="products-view-grid products">
					<div class="row row-gutter-14">
				@foreach($product as $pro)			
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-lgg-2">

<div class="product-box">															
	<div class="product-thumbnail">	
		<a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" title="{{$pro->name}}">
			<img src="{!!url('/uploads/product')!!}/{!!$pro->image!!}"  data-lazyload="{!!url('/uploads/product')!!}/{!!$pro->image!!}" alt="{{$pro->name}}">
		</a>	

		
		<div class="product-action hidden-md hidden-sm hidden-xs clearfix">
			<form action="{{route('add-cart',['id'=>$pro->id])}}" method="post" class="variants form-nut-grid margin-bottom-0" data-id="product-actions-13395964" enctype="multipart/form-data">
				<div>
					
					<input class="hidden" type="hidden" name="variantId" value="22261010" />
					<button class="btn-cart btn btn-primary  left-to" title="Chọn sản phẩm"  type="submit"  >
						<i class="fa fa-gear"></i>
					</button>
					
					
					<a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" data-handle="dong-ho-dress" class="btn-gray btn_view btn right-to quick-view" title="Xem nhanh">
						<i class="fa fa-eye"></i></a>
					
				</div>
			</form>
		</div>
	</div>
	<div class="product-info a-center">
		<h3 class="product-name"><a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" title="{{$pro->name}}">{{$pro->name}}</a></h3>
		
		
		<div class="price-box clearfix">
			<div class="special-price">
				{!!number_format($pro->price)!!}₫
			</div>											
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
</section>
@else
<section class="signup search-main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2><a href="#" class="title-box">Nhập từ khóa tìm kiếm </a></h2>
			</div>
			<div class="col-xs-12">
				<form action="{{route('frontend.search')}}" method="get" class="form-signup">
					
					<fieldset class="form-group">
						<input type="text" name="key" value="" placeholder="Tìm kiếm ..." class="form-control" style="width:300px; float:left;     line-height: 2.1;"  >
						<button type="submit" class="btn btn-primary" style="height: 45px;">Tìm kiếm</button>
					</fieldset>
				</form>  
			</div>
			     
			        
			
			<div class="col-xs-12">
				<h2 class="title-head">Không tìm thấy kết quả phù hợp</h2>

			</div>
		</div>
	</div>
</section>
@endif
@stop()