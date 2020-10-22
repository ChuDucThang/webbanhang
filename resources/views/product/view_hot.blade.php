@extends('layouts.frontend')
@section('frontend')
	 <section class="bread-crumb" style="background-image:url({{url('/')}}/public/frontend/images/breadcrum_bg1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb-title"><b> Tất cả sản phẩm</b></div>
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="{!!route('frontend.home')!!}"><span>Trang chủ</span></a>
                            <span> / </span>
                        </li>
                        <li><strong><span> Sản phẩm mới</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="main_container collection col-lg-9 col-lgg-10 col-lg-push-3 col-lgg-push-2">
                <div class="box-heading hidden relative">
                    <h1 class="title-head margin-top-0">Tất cả sản phẩm</h1>
                </div>
                <div class="category-products products">
                    <div class="sortPagiBar">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-xs-left text-sm-right">
                                <div class="bg-white clearfix">
                                    <div id="sort-by">
                                        <label class="left hidden-xs">Sắp xếp: </label>
                                        <ul>
                                            <li><span class="val">Mặc định</span>
                                                <ul class="ul_2">
                                                    <li><a href="javascript:;" onclick="sortby('default')">Mặc định</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('alpha-asc')">A &rarr; Z</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z &rarr; A</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="view-mode f-left">
                                        <a href="javascript:;" data-view="grid">
                                            <b class="btn button-view-mode view-mode-grid active ">
                                                <i class="fa fa-th" aria-hidden="true"></i>
                                            </b>
                                            <span>Lưới</span>
                                        </a>
                                        <a href="javascript:;" data-view="list" onclick="switchView('list')">
                                            <b class="btn button-view-mode view-mode-list ">
                                                <i class="fa fa-th-list" aria-hidden="true"></i>
                                            </b>
                                            <span>Danh sách</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="products-view products-view-grid">
                        <div class="row">
                        	@foreach($product_hot as $pro)
                            <div class="col-xs-6 col-xss-6 col-sm-4 col-md-4 col-lg-4 col-lgg-15">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" title="ĐỒNG HỒ DRESS">
                                            <img src="{!!url('/uploads/product')!!}/{!!$pro->image!!}" data-lazyload="{!!url('/uploads/product')!!}/{!!$pro->image!!}" alt="ĐỒNG HỒ DRESS">
                                        </a>
                                        <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                            <form action="{{route('add-cart',['id'=>$pro->id])}}" method="" class="variants form-nut-grid margin-bottom-0" data-id="product-actions-13395964" enctype="multipart/form-data">
                                                <div>
                                                    <input class="hidden" type="hidden" name="variantId" value="22261010" />
                                                    <button class="btn-cart btn btn-primary  left-to" title="Chọn sản phẩm" type="submit">
                                                        <i class="fa fa-gear"></i>
                                                    </button>
                                                    <a href="/dong-ho-dress" data-handle="dong-ho-dress" class="btn-gray btn_view btn right-to quick-view" title="Xem nhanh">
                                                        <i class="fa fa-eye"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="{!!route('frontend.product_detail',['id' => $pro->id])!!}" title="{!!$pro->name!!}">{!!$pro->name!!}</a></h3>
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
                      <div class="text-center">
							{{$product_hot->links()}}
					  </div>
                    </section>
                </div>
            </section>
            <aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-lgg-2 col-lg-pull-9 col-lgg-pull-10">
                <aside class="blog-aside aside-item sidebar-category blog-category">
                    <div class="aside-title">
                        <h2 class="title-head"><span>Danh mục</span></h2>
                    </div>
                    <div class="aside-content">
                        <div class="nav-category  navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                <li class="nav-item">
                                    <i class="fa  fa-caret-right"></i>
                                    <a class="nav-link" href="{!!route('frontend.home')!!}">Trang chủ</a></li>
                                <li class="nav-item">
                                    <i class="fa  fa-caret-right"></i>
                                    <a href="{!!route('frontend.product_master')!!}" class="nav-link">Sản phẩm</a>
                                    <i class="fa fa-angle-down"></i>
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
                <aside class="aside-item filter-tag-style-1">
                    <div class="aside-title">
                        <h2 class="title-head margin-top-0"><span>Lọc</span></h2>
                    </div>
                    <div class="aside-filter">
                        <div class="filter-container">
                            <div class="filter-container__selected-filter" style="display: none;">
                                <div class="filter-container__selected-filter-header clearfix">
                                    <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                    <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="filter-container__selected-filter-list">
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                        <aside class="aside-sub-item filter-price">
                            <div class="aside-sub-title">
                                <h2 class="title-head margin-top-0"><span>Giá sản phẩm</span></h2>
                            </div>
                            <div class="aside-content filter-group">
                                <div id='slider'></div>
                                <a id="old-value" href="javascript:;"></a>
                                <div class="price-item-stop clearfix">
                                    <div id='start'><input value="0"></div>
                                    <div id='stop'><input value="10.000.000₫"></div>
                                </div>
                                <a id="filter-value" class="btn btn-primary" href="javascript:;" onclick="_toggleFilterdqdt(this);" data-value="(>-1 AND <10000001)">Lọc giá</a>
                            </div>
                        </aside>
                        <aside class="aside-sub-item filter-tag-style-1">
                            <div class="aside-sub-title">
                                <h2 class="title-head margin-top-0"><span>Màu sắc</span></h2>
                            </div>
                            <div class="aside-content filter-group">
                                <ul>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-vang">
                                                <input type="checkbox" id="filter-vang" data-group="tag1" data-field="tags" data-text="Vàng" value="(Vàng)" data-operator="OR">
                                                <i class="fa"></i>
                                                Vàng
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-do">
                                                <input type="checkbox" id="filter-do" data-group="tag1" data-field="tags" data-text="Đỏ" value="(Đỏ)" data-operator="OR">
                                                <i class="fa"></i>
                                                Đỏ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-trang">
                                                <input type="checkbox" id="filter-trang" data-group="tag1" data-field="tags" data-text="Trắng" value="(Trắng)" data-operator="OR">
                                                <i class="fa"></i>
                                                Trắng
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-nau">
                                                <input type="checkbox" id="filter-nau" data-group="tag1" data-field="tags" data-text="Nâu" value="(Nâu)" data-operator="OR">
                                                <i class="fa"></i>
                                                Nâu
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-da-cam">
                                                <input type="checkbox" id="filter-da-cam" data-group="tag1" data-field="tags" data-text="Da cam" value="(Da cam)" data-operator="OR">
                                                <i class="fa"></i>
                                                Da cam
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-hong">
                                                <input type="checkbox" id="filter-hong" data-group="tag1" data-field="tags" data-text="Hồng" value="(Hồng)" data-operator="OR">
                                                <i class="fa"></i>
                                                Hồng
                                            </label>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </aside>
                <div class="aside-item aside-tags">
                    <div>
                        <div class="aside-title margin-top-5">
                            <h2 class="title-head"><span>Tags</span></h2>
                        </div>
                        <div class="aside-content list-tags">
                            <p>Hiện chưa có tag nào, vui lòng thêm tag cho sản phẩm và thiết lập trong Thiết lập giao diện -> Trang danh sách sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="aside-item aside-mini-list-product mb-5">
                    <div>
                        <div class="aside-title">
                            <h2 class="title-head">
                                <a href="/san-pham-noi-bat" title="Sản phẩm nổi bật">Sản phẩm nổi bật</a>
                            </h2>
                        </div>
                        <div class="aside-content related-product">
                            <div class="product-mini-lists">
                                <div class="products">
                                    <div class="row row-noGutter">
                                        <div class="col-sm-12">
                                            <div class="product-mini-item clearfix  ">
                                                <div class="product-img relative">
                                                    <a href="/collections/tat-ca-san-pham/products/dong-ho-dress">
                                                        <img src="asset/images/product2.jpg" alt="ĐỒNG HỒ DRESS">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3><a href="/collections/tat-ca-san-pham/products/dong-ho-dress" title="ĐỒNG HỒ DRESS" class="product-name">ĐỒNG HỒ DRESS</a></h3>
                                                    <div class="price-box">
                                                        <div class="special-price"><span class="price product-price">14.000.000₫</span> </div> <!-- Giá -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-noGutter">
                                        <div class="col-sm-12">
                                            <div class="product-mini-item clearfix  ">
                                                <div class="product-img relative">
                                                    <a href="/collections/tat-ca-san-pham/products/dong-ho-lemans">
                                                        <img src="asset/images/product2.jpg" alt="ĐỒNG HỒ LEMANS">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3><a href="/collections/tat-ca-san-pham/products/dong-ho-lemans" title="ĐỒNG HỒ LEMANS" class="product-name">ĐỒNG HỒ LEMANS</a></h3>
                                                    <div class="price-box">
                                                        <div class="special-price"><span class="price product-price">5.470.000₫</span> </div> <!-- Giá -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-noGutter">
                                        <div class="col-sm-12">
                                            <div class="product-mini-item clearfix  ">
                                                <div class="product-img relative">
                                                    <a href="/collections/tat-ca-san-pham/products/dong-ho-sohnle">
                                                        <img src="asset/images/product2.jpg" alt="ĐỒNG HỒ SOHNLE">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3><a href="/collections/tat-ca-san-pham/products/dong-ho-sohnle" title="ĐỒNG HỒ SOHNLE" class="product-name">ĐỒNG HỒ SOHNLE</a></h3>
                                                    <div class="price-box">
                                                        <div class="special-price"><span class="price product-price">15.750.000₫</span> </div> <!-- Giá -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.products -->
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="aside-item banner">
                    <div class="aside-content">
                        <a href="#">
                            <img src="asset/images/aside_banner.png" alt="banner" class="banner-img" />
                        </a>
                    </div>
                </aside>
            </aside>
            <div id="open-filters" class="open-filters hidden-lg">
                <i class="fa fa-align-right"></i>
                <span>Lọc</span>
            </div>
        </div>
    </div>
@stop()