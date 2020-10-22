@extends('layouts.frontend')
@section('frontend')
<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>Tin tức</b></div>
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="{{route('frontend.home')}}" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					
					
					<li><strong >Tin tức</strong></li>
					
					
				</ul>
			</div>
		</div>
	</div>
</section>


<div class="container">
	<div class="box-heading relative">
		<h1 class="title-head page_title">Tin tức</h1><span> ( Có tất cả {{$count}} bài viết ) </span>
	</div>
	<div class="row">
		<section class="right-content col-md-9 ">			
			
			<section class="list-blogs blog-main">
	<div class="row">
		@foreach($new as $n)	
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<article class="blog-item">
				<div>
					<div class="blog-item-thumbnail">						
						<a href="{!!route('frontend.news_detail',['id' => $n->id])!!}" title="{{$n->title}}">
							
							<img src="{{url('uploads/news')}}/{{$n->image}}" alt="{{$n->title}}">
							
						</a>
					</div>
					<div class="blog-item-info">
						<div class="post-time">							
							<div class="inline-block">{{date('d/m/Y',strtotime($n->created_at))}}
							</div>
						</div>
						<h3 class="blog-item-name"><a href="{!!route('frontend.news_detail',['id' => $n->id])!!}" title="{{$n->title}}">{{$n->title}}</a></h3>
						
						<p class="blog-item-summary"> {{$n->description}}</p>
						
						<!-- <div class="info-author">
							<span>Bởi  Trum Cucumber</span> (1) Bình luận
						</div> -->
					</div>
				</div>
			</article>
		</div>
			
		@endforeach
	</div>

</section>
<div class="row">
	<div class="col-xs-12 a-center">
		
		<nav>
  <ul class="pagination clearfix">
     

  </ul>
</nav>
		
	</div>
</div>
				
		</section>
		
		<aside class="left left-content col-md-3 ">
			
<aside class="blog-aside aside-item sidebar-category blog-category">	
	<div class="aside-title">
		<h2 class="title-head"><span>Danh mục tin</span></h2>
	</div>	
	<div class="aside-content">
		<div class="nav-category  navbar-toggleable-md" >
			<ul class="nav navbar-pills">
				
				
				<li class="nav-item">
					<i class="fa  fa-caret-right"></i>
					<a class="nav-link" href="{{route('frontend.home')}}">Trang chủ</a></li>
					
					
				
				<li class="nav-item">
					<i class="fa  fa-caret-right"></i>
					<a href="{{route('frontend.product_master')}}" class="nav-link">Sản phẩm</a>
					<i class="fa fa-angle-down" ></i>
					<ul class="dropdown-menu">
						
						<li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.product_hp')}}">Sản phẩm mới</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.product_hs')}}">Sản phẩm khuyến mãi</a>
                        </li>
                        @foreach($cats as $c)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.product',['id'=>$c->id])}}">{!!$c->name!!}</a>
                        </li>
                        @endforeach						
					</ul>
				</li>
				
					
				
				<li class="nav-item">
					<i class="fa  fa-caret-right"></i>
					<a class="nav-link" href="{{route('frontend.intro')}}">Giới thiệu</a></li>
					
					
				
				<li class="nav-item">
					<i class="fa  fa-caret-right"></i>
					<a class="nav-link" href="{{route('frontend.news')}}">Tin tức</a></li>
					
					
				
				<li class="nav-item">
					<i class="fa  fa-caret-right"></i>
					<a class="nav-link" href="{{route('frontend.contact')}}">Liên hệ</a></li>
					
					
				</ul>
			</div>
		</div>
	</aside>
	

	
	<div class="blog-aside aside-item aside-tags">
		<div>
			<div class="aside-title margin-top-5">
				<h2 class="title-head"><span>Tags</span></h2>
			</div>
			<div class="aside-content list-tags">
				

				
				
				<p>Hiện chưa có tag nào, vui lòng thêm tag cho sản phẩm và thiết lập trong Thiết lập giao diện -> Trang tin tức</p>
					
				
			</div>
		</div>
	</div>
	
	
	<div class="blog-aside aside-item">
		<div >
			<div class="aside-title">
				<h2 class="title-head"><span><a href="/tin-tuc" title="Tin nổi bật">Tin nổi bật</a></span></h2>
			</div>
			<div class="aside-content">
				<div class="blog-list blog-image-list">
					@foreach($new2 as $n2)
					<div class="loop-blog">
						<div class="thumb-left">
							<a href="{!!route('frontend.news_detail',['id' => $n2->id])!!}" title="{{$n2->title}}">
								
								<img src="{!!url('uploads/news')!!}/{!!$n2->image!!}" style="width:100%;" alt="{{$n2->title}}" class="img-responsive">
								
							</a>
							
						</div>
						<div class="name-right">
							
							<h3><a href="{!!route('frontend.news_detail',['id' => $n2->id])!!}" title="{{$n2->title}}">{{$n2->title}}</a></h3>
							<div class="post-time">
								{{date('d/m/Y',strtotime($n2->created_at))}}
							</div>
							
						</div>
					</div>
					@endforeach					
									
				</div>
				
			</div>
		</div>
	</div>
	
		</aside>
		

	</div>
</div>
@stop()