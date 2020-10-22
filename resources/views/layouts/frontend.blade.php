<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        Tama - Web tranh
    </title>
    <!-- ================= Page description ================== -->
    <meta name="description" content="">
    <!-- ================= Meta ================== -->
    <meta name="keywords" content="nhập các keywords cho trang chủ tại đây" />
    <meta name='revisit-after' content='1 days' />
    <meta name="robots" content="noodp,index,follow" />
    <!-- ================= Favicon ================== -->
    <link rel="icon" href="{!!url('public/images/frontend.ico')!!}"  />
    <!-- Facebook Open Graph meta tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Tama - Web tranh">
    <meta property="og:image" content="{{url('/')}}/public/frontend/images/logo.png">
    <meta property="og:image:secure_url" content="{{url('/')}}/public/frontend/images/logo.png">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://tama.net">
    <meta property="og:site_name" content="Tama">
    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/frontend/fontawesome/css/font-awesome.min.css">
    <link href="{{url('/')}}/public/frontend/css/plugin.min.css" rel="stylesheet" type="text/css" />
    <!-- Build Main CSS -->
    <link href="{{url('/')}}/public/frontend/css/base.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/public/frontend/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/public/frontend/css/module.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/public/frontend/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/public/frontend/css/cart.css" rel="stylesheet" type="text/css" />
    <!-- Header JS -->
</head>

<body>
    <!-- Main content -->
    <header class="header">
        <div class="topbar-mobile hidden-lg hidden-md text-center text-md-left">
            <div class="container">
                <i class="fa fa-mobile" style=" font-size: 20px; display: inline-block; position: relative; transform: translateY(2px); "></i> Hotline:
                <span>
                    <a href="callto:123456789"> 123456789</a>
                </span>
            </div>
        </div>
        <div class="container">
            <div class="header-content clearfix a-center">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="language a-left hidden-sm hidden-xs">
                            Chào mừng bạn đến với Tama !
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="logo inline-block a-left">
                            <a href="{{route('frontend.home')}}" class="logo-wrapper ">
                                <img src="{{url('/')}}/public/frontend/images/logo.png" alt="logo ">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <ul>
                            <li>
                                <div class="icon-headers mini-cart">
                                    <div class="icon-header">
                                        <div class="heading-user hidden-xs hidden-sm">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="icon-block top-cart-content manh">
                                        <form action="{{route('frontend.search')}}" method="get" role="search">
                                            <input name="key" value="" placeholder="Tìm sản phẩm...">
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-cart-contain f-right ">
                                    <div class="mini-cart text-xs-center">
                                        <div class="heading-cart hidden-xs hidden-sm">
                                            <a href="{!!route('view-cart')!!}">
                                                <div class="icon f-left relative">
                                                    <i class="fa fa-shopping-bag"></i>
                                                    <span class="cartCount count_item_pr" id="cart-total">@if($cart->items) {{$cart->count_cart()}} @else 0 @endif</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="top-cart-content">
                                            <ul id="cart-sidebar" class="mini-products-list count_li">
                                                <li class="list-item">
                                                    @if($cart->items)
                                                        @foreach($cart->items as $item)
                                                    <ul>
                                                        <table class="table table-reponsive table-hover">
                                                            <tr>
                                                                <td >
                                                                    <img src="{{url('uploads/product')}}/{{$item['image']}}" width="80px" alt="">
                                                                </td>
                                                                <td>
                                                                    {{$item['name']}}
                                                                </td>
                                                                <td>
                                                                    {{number_format($item['price'])}}₫
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </ul>
                                                        @endforeach
                                                    @endif

                                                </li>
                                                <li class="action">
                                                    <ul>
                                                        <li class="li-fix-1 ">
                                                            <div class="top-subtotal">
                                                                Tổng tiền thanh toán: {{number_format($cart->total())}}₫
                                                                <span class="price"></span>
                                                            </div>
                                                        </li>
                                                        <li class="li-fix-2" style="">
                                                            <div class="actions">
                                                                <a href="{!!route('view-cart')!!}" class="btn btn-primary  manh">
                                                                    <span>Giỏ hàng</span>
                                                                </a>
                                                                <a href="/checkout" class="btn btn-checkout btn-gray">
                                                                    <span>Thanh toán</span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon-headers mini-cart">
                                    <div class="heading-user hidden-xs hidden-sm">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="icon-block top-cart-content cart-dropdown header-link-dropdown">
                                        <ul class="cart-list link-dropdown-list">
                                            <li class="account-icon"> <a href="#"><span></span></a>
                                                <div class="header-link-dropdown account-link-dropdown product-name">
                                                    <ul class="link-dropdown-list">
                                                        @if(Auth::guest())
                                                        <li>
                                                            <a href="{{route('frontend.login')}}"><i class="fa fa-user"></i> Đăng nhập</a>
                                                        </li>
                                                        <li><a href="{{route('frontend.register')}}"><i class="fa fa-user-plus"></i> Đăng ký</a>
                                                        </li>
                                                        @else
                                                        <li>
                                                            <span>Xin chào : {{Auth::user()->name}}</span>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('frontend.logout')}}" onclick="return confirm('Bạn có chắc chắn muốn thoát không ?')"><i class="fa fa-user-plus"></i> Đăng xuất</a>
                                                        </li>
                                                        @endif
                                                        <li class="li-search hidden"><a href="javscrript:;">
                                                                <i class="fa fa-search"></i></a>
                                                            <div class="dropdown topbar-dropdown hidden-md hidden-sm hidden-xs">
                                                                <div class="content a-center">
                                                                    <div class="header_search search_form">
                                                                        <form class="input-group search-bar search_form" action="/search" method="get" role="search">
                                                                            <input type="search" name="query" value="" placeholder="Tìm sản phẩm" class="input-group-field st-default-search-input search-text" autocomplete="off">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn icon-fallback-text">
                                                                                    <i class="fa fa-search"></i>
                                                                                </button>
                                                                            </span>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu-bar hidden-md hidden-lg">
                    <img src="{{url('/')}}/public/frontend/images/menu-bar.png" alt="menu bar" />
                </div>
                <a href="{!!route('view-cart')!!}" class="icon-cart-mobile hidden-md hidden-lg f-left absolute" >
                    <div class="icon relative">
                        <i class="fa fa-shopping-bag"></i>
                        <span class="cartCount count_item_pr">@if($cart->items) {{$cart->count_cart()}} @else 0 @endif</span>
                    </div>
                </a>
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="hidden-sm hidden-xs">
                    <ul class="nav nav-left">
                        <li class="nav-item active"><a class="nav-link" href="{{route('frontend.home')}}">Trang chủ</a></li>
                        <li class="nav-item  has-mega">
                            <a href="{!!route('frontend.product_master')!!}" class="nav-link">Sản phẩm <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>
                            <div class="mega-content">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">
                                            @foreach($cats as $c)
                                            <li class="level1 item">
                                                <h2 class="h4"><a href="{{route('frontend.product',['id' => $c->id])}}"><span>{{$c->name}}</span></a> </h2>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item "><a class="nav-link" href="{{route('frontend.intro')}}">Giới thiệu</a></li>
                        <li class="nav-item "><a class="nav-link" href="{!!route('frontend.news')!!}">Tin tức</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{route('frontend.contact')}}">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="hidden-lg hidden-md menu-offcanvas">
                    <div class="head-menu clearfix">
                        <ul class="list-inline">
                            <li>
                                <a href="{{route('frontend.login')}}"><i class="fa fa-user"></i> Đăng nhập</a>
                            </li>
                            <li><span>hoặc</span></li>
                            <li><a href="{{route('frontend.register')}}">Đăng ký</a>
                            </li>
                            <li class="li-search">
                                <div class="header_search search_form">
                                    <form class="input-group search-bar search_form" action="/search" method="get" role="search">
                                        <input type="search" name="query" value="" placeholder="Tìm sản phẩm" class="input-group-field st-default-search-input search-text" autocomplete="off">
                                        <span class="input-group-btn">
                                            <button class="btn icon-fallback-text">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <div class="menuclose"><i class="fa fa-close"></i></div>
                    </div>
                    <ul id="nav-mobile" class="nav hidden-md hidden-lg">
                        <li class="h3">
                            MENU
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="{{route('frontend.home')}}">Trang chủ</a></li>
                        <li class="nav-item ">
                            <a href="{!!route('frontend.product_master')!!}" class="nav-link">Sản phẩm <i class="fa faa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                @foreach($cats as $c)
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="{{route('frontend.product',['id' => $c->id])}}">{{$c->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item "><a class="nav-link" href="{{route('frontend.intro')}}">Giới thiệu</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{route('frontend.news')}}">Tin tức</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{route('frontend.contact')}}">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- BANNER -->
    @yield('frontend')
    <!-- EBD MAINNNNNNNNNNNNNNNNNN -->
 
    <div class="section-newsletter">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-5 col-sm-5 col-xs-12">
                        <div class="newsletter-title">
                            <div class="main-title">THEO DÕI BẢN TIN</div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7 col-xs-12">
                        <div class="item">
                            <div class="newsletter-box">
                                <form action="https://sapo.us19.list-manage.com/subscribe/post?u=2887dcda77021868cccd236ea&id=7ace19f37b" class="margin-bottom-0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                    <input type="email" name="subscribe" id="subscribe" class="search_terms" placeholder="Email" value>
                                    <button class="btn-color" type="submit" value title="Subscribe">Đăng ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="site-footer">
            <div class="container">
                <div class="content">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="f-logo"><img style="width: 100px;" src="{{url('/')}}/public/frontend/images/logo.png" alt="Tama"></div>
                            </div>
                            <div class="col-sm-9">
                                <div class="detail">
                                    Với một thị trường kinh tế mở và năng động như hiện nay ở Việt Nam, sản phẩm tranh của các quốc gia hầu hết đều có mặt và được tiêu thụ rộng rãi. Sự đa dạng càng được thể hiện rõ nét hơn ở các dòng sản phẩm tranh trang trí với những bức tranh đến từ nước ngoài và cả ở trong nước.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-inner padding-top-35 padding-bottom-30">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="hastog"><span>Chúng tôi</span></h3>
                                <ul class="list-menu list-blogs">
                                    <li><a href="{{route('frontend.home')}}">Trang chủ</a></li>
                                    <li><a href="{{route('frontend.product_master')}}">Sản phẩm</a></li>
                                    <li><a href="{{route('frontend.intro')}}">Giới thiệu</a></li>
                                    <li><a href="{{route('frontend.news')}}">Tin tức</a></li>
                                    <li><a href="{{route('frontend.contact')}}">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="hastog"><span>LIÊN KẾT</span></h3>
                                <ul class="list-menu list-blogs">
                                    <li><a href="/">Facebook</a></li>
                                    <li><a href="/">Instagram</a></li>
                                    <li><a href="/">Zalo</a></li>
                                    <li><a href="/">Tin tức</a></li>
                                    <li><a href="/">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="hastog"><span>Hướng Dẫn</span></h3>
                                <ul class="list-menu list-blogs">
                                    <li><a href="/">Mua hàng</a></li>
                                    <li><a href="/">Đặt hàng</a></li>
                                    <li><a href="/">Hỗ trợ khách hàng</a></li>
                                    <li><a href="/">Thông tin đổi trả</a></li>
                                    <li><a href="/">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="hastog margin-bottom-20"><span>THÔNG TIN</span></h3>
                                <ul class="list-menu list-showroom">
                                    <li style="padding-left: 0;">
                                        <p></p>
                                    </li>
                                    <li class="clearfix"><i class="block_icon fa fa-map-marker"></i>
                                        <p>
                                            266 Đội Cấn, Hà Nội, Việt Nam
                                        </p>
                                    </li>
                                    <li class="clearfix"><i class="block_icon fa fa-phone"></i>
                                        <a href="tel:123456789">123456789</a>
                                        <p>Thứ 2 - Chủ nhật: 9:00 - 18:00</p>
                                    </li>
                                    <li class="clearfix"><i class="block_icon fa fa-envelope"></i>
                                        <a href="mailto:emaildemo@gmail.com">emaildemo@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright clearfix">
                    <div class="inner clearfix">
                        <div class="row">
                            <div class="col-sm-6 a-left">
                                <span>© Bản quyền thuộc về <b>Cucumber</b> <b class="fixline">|</b> Cung cấp bởi <a href="https://www.sapo.vn/?utm_campaign=cpn:site_khach_hang-plm:footer&amp;utm_source=site_khach_hang&amp;utm_medium=referral&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=site_khach_hang" rel="nofollow" title="Tama" target="_blank">D Team</a></span>
                            </div>
                            <div class="col-sm-6 f-right">
                                <ul class="inline-list social-icons">
                                    <li>
                                        <a class="icon-fallback-text" href="#">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon-fallback-text" href="#">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon-fallback-text" href="#">
                                            <span class="fa fa-pinterest" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon-fallback-text" href="#">
                                            <span class="fa fa-instagram" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="back-to-top">
                        <i class="fa  fa-angle-up"></i>
                    </div>
                    <a href="tel:123456789" class="suntory-alo-phone bottom-left  suntory-alo-green " id="suntory-alo-phoneIcon">
                        <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
                    </a>
                </div>
                <div class="footer-bottom a-center">
                    <div class="footer-bottom-menu">
                        <ul class="">
                            <li><a href="{{route('frontend.home')}}">Trang chủ</a></li>
                            <li><a href="{{route('frontend.product_master')}}">Sản phẩm</a></li>
                            <li><a href="{{route('frontend.intro')}}">Giới thiệu</a></li>
                            <li><a href="{{route('frontend.news')}}">Tin tức</a></li>
                            <li><a href="{{route('frontend.contact')}}">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="footer-bottom-payment">
                        <img src="{{url('/')}}/public/frontend/images/thanhtoan.png" alt="Thanh toán ">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Add to cart -->
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>
    <div id="quickview" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="image margin-bottom-15">
                                <a class="img-product clearfix" title="" href="#">
                                    <img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" src="{{url('/')}}/public/frontend/images/logo.png" alt="quickview" />
                                </a>
                            </div>
                            <div id="thumbnail_quickview">
                                <div class="thumblist"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="content">
                                <h3 class="product-name"><a href="">Tên sản phẩm</a></h3>
                                <div class="status clearfix">
                                    Trạng thái: <span class="inventory">
                                        <i class="fa fa-check"></i> Còn hàng
                                    </span>
                                </div>
                                <div class="price-box margin-bottom-20 clearfix">
                                    <div class="special-price f-left">
                                        <span class="price product-price">giá</span>
                                    </div>
                                    <div class="old-price">
                                        <span class="price product-price-old">
                                            giá sale
                                        </span>
                                    </div>
                                </div>
                                <div class="product-description rte"></div>
                                <a href="#" class="view-more hidden">Xem chi tiết</a>
                                <div class="clearfix"></div>
                                <div class="info-other">
                                </div>
                                <form action="/cart/add" method="post" enctype="multipart/form-data" class="margin-top-20 variants form-ajaxtocart hasswatch">
                                    <span class="price-product-detail hidden" style="opacity: 0;">
                                        <span class=""></span>
                                    </span>
                                    <select name='variantId' class="hidden" style="display:none"></select>
                                    <div class="clearfix"></div>
                                    <div class="quantity_wanted_p">
                                        <label for="quantity-detail" class="quantity-selector">Số lượng</label>
                                        <input type="text" onchange="if(this.value == 0)this.value=1;" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" id="quantity-detail" name="quantity" value="1" class="quantity-selector text-center">
                                        <button type="submit" name="add" class="btn  btn-primary add_to_cart_detail ajax_addtocart">
                                            <span>Mua sản phẩm</span>
                                        </button>
                                    </div>
                                    <div class="total-price" style="display:none">
                                        <label>Tổng cộng: </label>
                                        <span></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-close btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
        </div>
    </div>`
    <div class="error-popup awe-popup">
        <div class="overlay no-background"></div>
        <div class="popup-inner content">
            <div class="error-message"></div>
        </div>
    </div>
    <div id="popup-cart" class="hidden" role="dialog">
        <div id="popup-cart-desktop" class="clearfix">
            <div class="title-popup-cart">
                <i class="fa fa-check" aria-hidden="true"></i> Bạn đã thêm <span class="cart-popup-name" style="color: red;"></span> vào giỏ hàng
            </div>
            <div class="content-popup-cart">
                <div class="thead-popup">
                    <div style="width: 54%;" class="text-left">Sản phẩm</div>
                    <div style="width: 15%;" class="text-center">Đơn giá</div>
                    <div style="width: 15%;" class="text-center">Số lượng</div>
                    <div style="width: 15%;" class="text-center">Thành tiền</div>
                </div>
                <div class="tbody-popup">
                </div>
                <div class="tfoot-popup">
                    <div class="tfoot-popup-1 clearfix">
                        <div class="pull-left popup-ship">
                            <div class="title-quantity-popup">
                                <a href="/cart">
                                    Giỏ hàng của bạn <i>(<b class="cart-popup-count"></b> sản phẩm)</i>
                                </a>
                            </div>
                        </div>
                        <div class="pull-right popup-total">
                            <p>Thành tiền: <span class="total-price"></span></p>
                        </div>
                    </div>
                    <div class="tfoot-popup-2 clearfix">
                        <a class="button btn-proceed-checkout" title="Tiến hành đặt hàng" href="/checkout"><span>Tiến hành đặt hàng</span></a>
                        <a class="button btn btn-gray btn-continue" title="Tới giỏ hàng" href="/cart"><span><span>Tới giỏ hàng</span></span></a>
                    </div>
                </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-times-circle"></i></a>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
    </div>
    <script src="{{url('/')}}/public/frontend/js/jquery-2.2.3.min.js"></script>

    <!-- Plugin JS -->
    <script src="{{url('/')}}/public/frontend/js/appear.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/frontend/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/frontend/js/bootstrap.min.js"></script>
    <!-- Quick view -->
    <script src="" type="text/javascript"></script>
    <!-- Main JS -->
    <script src="{{url('/')}}/public/frontend/js/main.js" type="text/javascript"></script>
    <!-- Product detail JS,CSS -->
</body>

</html>