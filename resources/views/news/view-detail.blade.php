@extends('layouts.frontend')
@section('frontend')
<section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="breadcrumb-title"><b>{{$news_detail->title}}</b></div>
				
				<ul class="breadcrumb">	

					<li class="home">
						<a  href="{{route('frontend.home')}}" ><span >Trang chủ</span></a>						
						<span> / </span>
					</li>
					
					<li >
						<a  href="{{route('frontend.news')}}"><span >Tin tức</span></a>	
						<span> / </span>
					</li>
					<li><strong >{{$news_detail->title}}</strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container article-wraper">
	<div class="row">		
		<section class="right-content col-lg-9 ">

			<article class="article-main">
				
				<div class="row">
					<div class="col-lg-12">

						<div class="article-details">

							<div class="article-image">
								<a href="{{url('uploads/news')}}/{{$news_detail->image}}" title="{{$news_detail->title}}">
									
									<img class="img-fluid" src="{{url('uploads/news')}}/{{$news_detail->image}}" alt="{{$news_detail->title}}">
									

								</a>
							</div>	

							<h1 class="article-title"><a href="{{url('uploads/news')}}/{{$news_detail->image}}" title="{{$news_detail->title}}">{{$news_detail->title}}</a></h1>
							<div class="post-time">
								{{date('d/m/Y',strtotime($news_detail->created_at))}}, <span>Bởi  Trum Cucumber</span>
							</div>
							<div class="article-content">
								<div class="rte">
									{{$news_detail->description}}
								</div>
							</div>

						</div>
					</div>
					<div class="col-xs-12">
						<div class="row row-noGutter tag-share">
							
							
							<div class="col-xs-12 col-sm-12 a-left">
								
  
  



<div class="social-media" data-permalink="https://tama.bizwebvietnam.net/chiem-nguong-citizen-np1026-86a-dong-ho-co-lo-may-tot-nhat-cua-citizen-2018">
	<label>Chia sẻ: </label>
	
	<a target="_blank" href="//www.facebook.com/sharer.php?u=https://tama.bizwebvietnam.net/chiem-nguong-citizen-np1026-86a-dong-ho-co-lo-may-tot-nhat-cua-citizen-2018" class="share-facebook" title="Chia sẻ lên Facebook">
		<i class="fa fa-facebook-official"></i>
	</a>
	

	
	<a target="_blank" href="//twitter.com/share?text=chiem-nguong-citizen-np1026-86a"  class="share-twitter" title="Chia sẻ lên Twitter">
		<i class="fa fa-twitter"></i>
	</a>
	

	
	<a target="_blank" href="//pinterest.com/pin/create/button/?url=https://tama.bizwebvietnam.net/chiem-nguong-citizen-np1026-86a-dong-ho-co-lo-may-tot-nhat-cua-citizen-2018" class="share-pinterest" title="Chia sẻ lên pinterest">
		<i class="fa fa-pinterest"></i>
	</a>
	

	

	
	<a target="_blank" href="//plus.google.com/share?url=https://tama.bizwebvietnam.net/chiem-nguong-citizen-np1026-86a-dong-ho-co-lo-may-tot-nhat-cua-citizen-2018" class="share-google" title="+1">
		<i class="fa fa-google-plus"></i>
	</a>
	
</div>
							</div>
							
						</div>
					</div>
					 
					<div class="col-xs-12">
						
						 
						<div id="article-comments">
							<h5 class="title-form-coment gothamvnu-book">1 bình luận</h5>
							<div class="hidden">1 bình luận</div>
														
							<div class="article-comment clearfix">
								<figure class="article-comment-user-image">
									<img src="https://www.gravatar.com/avatar/8c1a93ecb4f72042fde07d8b739d6db2?s=110&d=identicon" alt="binh-luan" class="block">
								</figure>

								<div class="article-comment-user-comment">
									<p class="user-name-comment"><strong class="gothamvnu-book">tester</strong>
										<a href="#article_comments" class="btn-link pull-xs-right hidden">Trả lời</a></p>
									<span class="article-comment-date-bull">27/03/2019</span>
									<p class="comment-content">test comment</p>

								</div>
							</div> 
							   
						</div>
						<div class="a-center">
							
						</div>
						
						

						<form accept-charset="UTF-8" action="/posts/chiem-nguong-citizen-np1026-86a-dong-ho-co-lo-may-tot-nhat-cua-citizen-2018/comments" id="article_comments" method="post">
<input name="FormType" type="hidden" value="article_comments" />
<input name="utf8" type="hidden" value="true" /> 
						
						

						<div class="col-lg-12">
							<div class="form-coment">
								<div class="row">
									<div class="margin-top-40">
										<h5 class="title-form-coment gothamvnu-book">Viết bình luận của bạn:</h5>
									</div>
									<div class="">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6">
												<fieldset class="form-group">										
													<input placeholder="Họ tên*" type="text" class="form-control form-control-lg" value="Nguyễn Anh" id="full-name" name="Author" Required>
												</fieldset>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6">
												<fieldset class="form-group">										
													<input placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" type="email" class="form-control form-control-lg" value="qwerty@gmail.com" id="email" name="Email" Required>
												</fieldset>
											</div>
										</div>
									</div>
									<fieldset class="form-group col-xs-12 col-sm-12 col-md-12">										
										<textarea placeholder="Nội dung*" class="form-control form-control-lg" id="comment" name="Body" rows="6" Required></textarea>
									</fieldset>
									<div class="margin-bottom-30 clearfix">
										<button type="submit" class="btn btn-primary">Gửi bình luận</button>
									</div>
								</div>
							</div> <!-- End form mail -->
						</div>
						</form>
					</div>
											
				</div>	
				

			</article>
		</section>		
		
		<aside class="left left-content col-lg-3 ">
			
			
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