<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>QUẢN TRỊ HỆ THỐNG</title>
  <link rel="icon" href="{!!url('public/images/backend.png')!!}" alt="logo" width="100%">
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/bootstrap.css">
  
  <!-- Custom fonts for this template-->
  <link href="{{url('/')}}/public/backend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <!-- <link href="{{url('/')}}/public/backend/ccc/dataTables.bootstrap4.css" rel="stylesheet"> -->
  <!-- Custom styles for this template-->
  <link href="{{url('/')}}/public/backend/css/sb-admin.css" rel="stylesheet">
  <!--Cheditor & ckfinter  -->
  <script type="text/javascript" src="{!! asset('public/plugin/ckeditor/ckeditor.js') !!}"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{route('backend.index')}}">HỆ THỐNG BÁN TRANH</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Trang chủ">
          <a class="nav-link" href="{{route('backend.index')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Trang chủ</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Banner">
          <a class="nav-link" href="{{route('backend.banner-index')}}">
            <i class="fa fa-fw fa-photo"></i>
            <span class="nav-link-text">Banner</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Danh mục">
          <a class="nav-link" href="{{route('backend.category-index')}}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Danh mục</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sản phẩm">
          <a class="nav-link" href="{{route('backend.product-index')}}">
            <i class="fa fa-fw fa-product-hunt"></i>
            <span class="nav-link-text">Sản phẩm</span>
          </a>
  
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tin tức">
          <a class="nav-link" href="{{route('backend.new-index')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tin tức</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Đơn hàng">
          <a class="nav-link" href="{{route('backend.order-index')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Đơn hàng</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Tài khoản</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="{{route('backend.customer-index')}}">Khách hàng</a>
            </li>
            <li>
              <a href="{{route('backend.user-index')}}">Quản trị</a>
            </li>
            <li>
          </ul>
        </li>
      </ul>
      <!-- <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul> -->
      <ul class="navbar-nav ml-auto pull-right" style="padding-right: 40px;">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li>
          <a class="nav-link" style="color: white;">Xin chào: </a>
        </li>
        <li class="nav-item dropdown" style="margin-top: 15px;
    color: white;">
              <div  class="dropdown-toggle" data-toggle="dropdown">
                <a href="" style="color: white;">  {{Auth::user()->name}}</a>
              </div>
                <ul class="dropdown-menu">
                  <li><a href="" title="">Thông tin</a></li>
                  <li><a href="{{route('backend.logout')}}" title="" onclick="return confirm('Bạn có chắc chắn muốn thoát không ?')">Đăng xuất</a></li>
              </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">

    <!-- MAINNNN== -->
  <div class="container-fluid">
      <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{!!route('backend.index')!!}">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">@yield('title','Hệ thống')</li>
      @yield('title2')
    </ol>
   <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          @if(Session::has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('success')!!}
            </div>
          @endif
           @if(Session::has('error'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('error')!!}
            </div>
          @endif
          @yield('content')
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          @yield('footer')
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
   @yield('backend')
   Layout.main
  </div>
    <!-- MAINNNN== -->
  </div>
 
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website {{date('Y')}}</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/')}}/public/backend/js/jquery.min.js"></script>
    <script src="{{url('/')}}/public/backend/js/bootstrap.min.js"></script>
    <!-- <script src="{{url('/')}}/public/backend/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core plugin JavaScript-->
    <script src="{{url('/')}}/public/backend/js/jquery.easing.min.js"></script>
    <script src="{{url('/')}}/public/backend/js/Chart.min.js"></script>
    <!-- Page level plugin JavaScript-->
<!--     <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script> -->
    <!-- Custom scripts for all pages-->
    <script src="{{url('/')}}/public/backend/js/sb-admin.min.js"></script>
    <script src="{{url('/')}}/public/backend/js/sb-admin-charts.min.js"></script>
    <!-- Custom scripts for this page-->
<!--     <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script> -->
    <!-- <script src="{!! asset('public/js/app.js') !!}"></script>

     <script>
      $('#myEdit').on('show.bs.modal', function (event) {
        // console.log('Modal Open');
        var button = $(event.relatedTarget) 
        var name = button.data('name')
        var parent = button.data('parent')
        var status = button.data('status')
        var cat_id = button.data('id')

        var modal = $(this)

        // modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #parent').val(parent)
        modal.find('.modal-body #status').val(status)
        modal.find('.modal-body #cat_id').val(cat_id)
        // modal.find('.modal-body #cat_id').val(cat_id)
      })
    </script> -->
</body>

</html>
