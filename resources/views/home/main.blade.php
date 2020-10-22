@extends('layouts.frontend')
@section('frontend')
   <h1 class="hidden">Tama Watch </h1>
    <section class="awe-section-1">
        <div class="home-slider owl-carousel" data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0' data-nav="true">
        	@foreach($ban as $b)
            <div class="item manh">
                <a href="#">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{!! url('/uploads/banner') !!}/{{$b->image}}">
                        <img src="{!! url('/uploads/banner') !!}/{!! $b->image !!}" alt="alt slider demo" />
                    </picture>
                </a>
            </div>
            @endforeach
        </div><!-- /.products -->
    </section>
    <section class="awe-section-2">
        <div class="section section-banner  spacing-10 group-image-special">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="banner-item relative">
                            <div class="banner-image effect">
                                <img class="img-fluid" src="{{url('/')}}/public/frontend/images/banner_1.jpg" data-lazyload="{{url('/')}}/public/frontend/images/banner_1.jpg" alt="Tranh đồng hồ">
                            </div>
                            <div class="banner-info absolute">
                                <h4>Tranh đông hồ</h4>
                                <a class="btn btn-primary" href="#">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="banner-item relative">
                            <div class="banner-image effect">
                                <img class="img-fluid" src="{{url('/')}}/public/frontend/images/banner_1.jpg" data-lazyload="{{url('/')}}/public/frontend/images/banner_2.jpg" alt="Mua ngay 60%">
                            </div>
                            <div class="banner-info absolute">
                                <h4>Mua ngay 60%</h4>
                                <a class="btn btn-primary" href="#">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-12 hidden-sm">
                        <div class="banner-item relative">
                            <div class="banner-image effect">
                                <img class="img-fluid" src="{{url('/')}}/public/frontend/images/banner_1.jpg" data-lazyload="{{url('/')}}/public/frontend/images/banner_2.jpg" alt="Cửa hàng đồng hồ ">
                            </div>
                            <div class="banner-info absolute">
                                <h4>Cửa hàng tranh </h4>
                                <a class="btn btn-primary" href="#">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-3">
        <div class="section section_tab_product a-center products-view-grid">
            <div class="container">
                <div class="e-tabs">
                    <div class="row row-noGutter">
                        <div class="col-sm-12">
                            <div class="content">
                                <div class="section-title">
                                    <h2><a href="{{route('frontend.product_master')}}" title="SẢN PHẨM ">SẢN PHẨM </a></h2>
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link" data-tab="tab-1">
                                            <span> Sản phẩm mới </span>
                                        </li>
                                        <li class="tab-link" data-tab="tab-2">
                                            <span> Hàng bán chạy </span>
                                        </li>
                                        <li class="tab-link" data-tab="tab-3">
                                            <span> Hàng khuyến mãi </span>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-1">
                                        <div class="products row row-gutter-14">
                                        	@foreach($product_hot as $pro)
                                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" title="ĐỒNG HỒ DRESS">
                                                            <img src="{!!url('/uploads/product')!!}/{!!$pro->image!!}" data-lazyload="{!!url('/uploads/product')!!}/{!!$pro->image!!}" alt="{{$pro->name}}">
                                                        </a>
                                                        <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                            <form action="/cart/add" method="post" class="variants form-nut-grid margin-bottom-0" data-id="product-actions-13395964" enctype="multipart/form-data">
                                                                <div>
                                                                    <input class="hidden" type="hidden" name="variantId" value="22261010" />
                                                                    <a class="btn-cart btn btn-primary  left-to" title="Chọn sản phẩm"  href="{{route('add-cart',['id'=>$pro->id])}}">
                                                                        <i class="fa fa-gear"></i>
                                                                    </a>
                                                                    <a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" data-handle="dong-ho-dress" class="btn-gray btn_view btn right-to quick-view" title="Xem nhanh">
                                                                        <i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" title="{!! $pro->name !!}">{!! $pro->name !!}</a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                {!! number_format($pro->price) !!}₫
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div><!-- /.products -->
                                        <div class="see-more"><a class="btn btn-primary" href="{{route('frontend.product_hp')}}">Xem Thêm</a></div>
                                    </div>
                                    <div class="tab-content tab-2">
                                        <div class="products row row-gutter-14">
                                        	@foreach($product_pc as $pro3)
                                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <a href="{!!route('frontend.product_detail',['id' => $pro3->id])!!}" title="ĐỒNG HỒ DRESS">
                                                            <img src="{!!url('/uploads/product')!!}/{!!$pro3->image!!}" data-lazyload="{!!url('/uploads/product')!!}/{!!$pro3->image!!}" alt="{{$pro->name}}">
                                                        </a>
                                                        <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                            <form action="/cart/add" method="post" class="variants form-nut-grid margin-bottom-0" data-id="product-actions-13395964" enctype="multipart/form-data">
                                                                <div>
                                                                    <input class="hidden" type="hidden" name="variantId" value="22261010" />
                                                                    <button class="btn-cart btn btn-primary  left-to" title="Chọn sản phẩm" type="button" onclick="window.location.href='/dong-ho-dress'">
                                                                        <i class="fa fa-gear"></i>
                                                                    </button>
                                                                    <a href="{!!route('frontend.product_detail',['id' => $pro3->id])!!}" data-handle="dong-ho-dress" class="btn-gray btn_view btn right-to quick-view" title="Xem nhanh">
                                                                        <i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="{!!route('frontend.product_detail',['id' => $pro3->id])!!}" title="{!! $pro3->name !!}">{!! $pro->name !!}</a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                {!! number_format($pro3->price) !!}₫
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                         
                                        </div><!-- /.products -->
                                        <div class="see-more"><a class="btn btn-primary" href="{{route('frontend.product',['category_id' => 1])}}">Xem Thêm</a></div>
                                    </div>
  
  
                                    <div class="tab-content tab-3">
                                        <div class="products row row-gutter-14">
                                        	@foreach($product_sale as $pro2)
                                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <a href="{!!route('frontend.product_detail',['id' => $pro2->id])!!}" title="ĐỒNG HỒ DRESS">
                                                            <img src="{!!url('/uploads/product')!!}/{!!$pro2->image!!}" data-lazyload="{!!url('/uploads/product')!!}/{!!$pro2->image!!}" alt="ĐỒNG HỒ DRESS">
                                                        </a>
                                                        <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                            <form action="/cart/add" method="post" class="variants form-nut-grid margin-bottom-0" data-id="product-actions-13395964" enctype="multipart/form-data">
                                                                <div>
                                                                    <input class="hidden" type="hidden" name="variantId" value="22261010" />
                                                                    <button class="btn-cart btn btn-primary  left-to" title="Chọn sản phẩm" type="button" onclick="window.location.href='/dong-ho-dress'">
                                                                        <i class="fa fa-gear"></i>
                                                                    </button>
                                                                    <a href="/dong-ho-dress" data-handle="dong-ho-dress" class="btn-gray btn_view btn right-to quick-view" title="Xem nhanh">
                                                                        <i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="{!!route('frontend.product_detail',['id' => $pro2->id])!!}" title="{!! $pro2->name !!}">{!! $pro2->name !!}</a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                {!!number_format($pro2->price)!!}₫
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div><!-- /.products -->
                                        <div class="see-more"><a class="btn btn-primary" href="{{route('frontend.product_hs')}}">Xem Thêm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-4">
        <div class="section section_home_product">
            <div class="container">
                <div class="section-title">
                    <h2><a href="#">Sản phẩm đặc biệt</a></h2>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <p>sản phẩm chúng tôi rấtđặt biệt có một không hai trên thị trường</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="content">
                                        <div class="banner-image">
                                            <a href="#"><img src="{{url('/')}}/public/frontend/images/chinh_sach_1.jpg" data-lazyload="{{url('/')}}/public/frontend/images/im1.png" alt="Tranh1">
                                            </a>
                                        </div>
                                        <div class="policy-info">
                                            <h3><a href="#">Tranh1</a></h3>
                                            <p>Chi tiết</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="content">
                                        <div class="banner-image">
                                            <a href="#"><img src="{{url('/')}}/public/frontend/images/chinh_sach_2.jpg" data-lazyload="{{url('/')}}/public/frontend/images/im1.png" alt="Vừa">
                                            </a>
                                        </div>
                                        <div class="policy-info">
                                            <h3><a href="#">Vừa</a></h3>
                                            <p>QL- 31mm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="content">
                                        <div class="banner-image">
                                            <a href="#"><img src="{{url('/')}}/public/frontend/images/chinh_sach_3.jpg" data-lazyload="{{url('/')}}/public/frontend/images/im1.png" alt="Lớn">
                                            </a>
                                        </div>
                                        <div class="policy-info">
                                            <h3><a href="#">Lớn</a></h3>
                                            <p>QL- 31mm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="content">
                                        <div class="banner-image">
                                            <a href="#"><img src="{{url('/')}}/public/frontend/images/chinh_sach_4.jpg" data-lazyload="{{url('/')}}/public/frontend/images/im1.png" alt="Lớn nhất">
                                            </a>
                                        </div>
                                        <div class="policy-info">
                                            <h3><a href="#">Lớn nhất</a></h3>
                                            <p>QL- 31mm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="row">
                                <div class="content">
                                    <div class="banner-images">
                                        <a href="#"><img src="{{url('/')}}/public/frontend/images/sp.jpg" data-lazyload="{{url('/')}}/public/frontend/images/sp.jpg" alt="banner">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-5">
        <div class="section section-testimonial">
            <div class="container">
                <div class="top-right-carousel owl-carousel" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xss-items="1" data-margin="30" data-nav="true">
                    <div class="testimonial-item text-center">
                        <div class="testimonial-item">
                            <a class="img25"><img src="{{url('/')}}/public/frontend/images/testimo1.png" data-lazyload="{{url('/')}}/public/frontend/images/testimo1.png" alt="Tama Watch">
                            </a>
                        </div>
                        <div class="testimonial content">
                            <h4 class="client-title">Nguyễn Văn Mạnh</h4>
                            <p>Là một trong số rất ít các nhà sản xuất trên thế giới mà thực sự sản xuất đồng hồ cơ khí tại các cơ sở sản xuất riêng của mình , và là một trong những nhà sản xuất đồng hồ hiện dài nhất của Nhật Bản</p>
                            <h6>Chúng tôi luôn tin tưởng shop</h6>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-item">
                            <a class="img25"><img src="{{url('/')}}/public/frontend/images/testimo1.png" data-lazyload="{{url('/')}}/public/frontend/images/testimo1.png" alt="Tama Watch">
                            </a>
                        </div>
                        <div class="testimonial content">
                            <h4 class="client-title">Trần Xuân Mai</h4>
                            <p>Là một trong số rất ít các nhà sản xuất trên thế giới mà thực sự sản xuất đồng hồ cơ khí tại các cơ sở sản xuất riêng của mình , và là một trong những nhà sản xuất đồng hồ hiện dài nhất của Nhật Bản</p>
                            <h6>Chúng tôi luôn luôn tin tưởng shop</h6>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-item">
                            <a class="img25"><img src="{{url('/')}}/public/frontend/images/testimo1.png" data-lazyload="{{url('/')}}/public/frontend/images/testimo1.png" alt="Tama Watch">
                            </a>
                        </div>
                        <div class="testimonial content">
                            <h4 class="client-title">Nguyễn Hữu Tứ</h4>
                            <p>Là một trong số rất ít các nhà sản xuất trên thế giới mà thực sự sản xuất đồng hồ cơ khí tại các cơ sở sản xuất riêng của mình , và là một trong những nhà sản xuất đồng hồ hiện dài nhất của Nhật Bản</p>
                            <h6>Chúng tôi luôn luôn tin tưởng shop</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-6">
        <div class="section section_blog">
            <div class="container">
                <div class="section-title">
                    <h2><a href="{{route('frontend.news')}}" title="Tin mới nhất">Tin mới nhất</a></h2>
                </div>
                <div class="section-content">
                    <div class="blog-slider top-right-carousel owl-carousel" data-lg-items='3' data-md-items='3' data-sm-items='2' data-xs-items="2">
                    	@foreach($new as $n)
                        <article class="blog-item">
                            <div>
                                <div class="blog-item-thumbnail relative">
                                    <a href="{!!url('uploads/news')!!}/{!!$n->image!!}" title="{!!$n->title!!}">
                                        <img src="{!!url('uploads/news')!!}/{!!$n->image!!}" data-lazyload="{!!url('uploads/news')!!}/{!!$n->image!!}" alt="{!!$n->title!!}">
                                    </a>
                                </div>
                                <div class="blog-item-info m-4 asolute">
                                    <div class="post-time">
                                        <div class="inline-block">{{date('d/m/Y',strtotime($n->created_at))}}
                                        </div>
                                    </div>
                                    <h3 class="blog-item-name"><a href="{!!route('frontend.news_detail',['id' => $n->id])!!}" title="{!!$n->title!!}">{!!$n->title!!}</a></h3>
                                    <div class="info-author">
                                        <a href="{!!route('frontend.news_detail',['id' => $n->id])!!}" title="Xem thêm">Xem Thêm...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-7">
        <div class="section section-brand">
            <div class="container">
                <div class="owl-carousel owl-theme" data-lg-items="4" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xss-items="2" data-margin="30">
                    <div class="brand-item">
                        <a href="#" class="img25"><img src="" data-lazyload="{{url('/')}}/public/frontend/images/brand1.png" alt="Tama Watch">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="img25"><img src="" data-lazyload="{{url('/')}}/public/frontend/images/brand2.png" alt="Tama Watch">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="img25"><img src="" data-lazyload="{{url('/')}}/public/frontend/images/brand3.png" alt="Tama Watch">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="img25"><img src="" data-lazyload="{{url('/')}}/public/frontend/images/brand4.png" alt="Tama Watch">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="img25"><img src="" data-lazyload="{{url('/')}}/public/frontend/images/brand2.png" alt="Tama Watch">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="img25"><img src="" data-lazyload="{{url('/')}}/public/frontend/images/brand1.png" alt="Tama Watch">
                        </a>
                    </div>
                </div><!-- /.products -->
            </div>
        </div>
    </section>

@stop()