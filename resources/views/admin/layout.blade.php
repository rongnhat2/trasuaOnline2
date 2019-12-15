<!DOCTYPE html>
<html>
<head>
	<title>~ A D M I N ~</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap3.css')}}">
  	<link rel="stylesheet" href="{{asset('css/morris.css')}}">
  	<link rel="stylesheet" href="{{asset('css/jquery-jvectormap.css')}}">
  	<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
  	<link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
  	<link rel="stylesheet" href="{{asset('css/bootstrap3-wysihtml5.min.css')}}">
  	<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
  	<link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
  	<link rel="stylesheet" href="{{asset('css/allskin.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/styleAdmin.css')}}" />
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
	<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

	  	<header class="main-header">
		    <a href="/" class="logo">
		      	<span class="logo-mini"><b>R</b>T</span>
		      	<span class="logo-lg"><b>Real Tea</b></span>
		    </a>
	    <nav class="navbar navbar-static-top">
	      	<a href="#" class="sidebar-toggle fas fa-bars" data-toggle="push-menu" role="button">
	        	<span class="sr-only">Toggle navigation</span>
	      	</a>
            <a class="dropdown-item" style="color: white;float: right;padding: 15px;" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
	    </nav>
	  </header>
	  	<aside class="main-sidebar">
		    <section class="sidebar">
		      	<ul class="sidebar-menu" data-widget="tree">
		        	<li class="header">Thao Tác</li>
		        	<li class="treeview">
			          	<a href="#">
				            <i class="fa fa-dashboard"></i> <span>Sản Phẩm</span>
				            <span class="pull-right-container">
				             	<i class="fa fa-angle-left pull-right"></i>
				            </span>
			          	</a>
			          	<ul class="treeview-menu">
				            <li><a href="/AdminAllItem"><i class="fa fa-circle-o"></i>Kho Sản Phẩm</a></li>
				            <!-- <li><a href="/import_item"><i class="fa fa-circle-o"></i>Nhập Sản Phẩm</a></li> -->
			          	</ul>
		        	</li>
			        <li class="treeview">
			          	<a href="#">
			            	<i class="fa fa-dashboard"></i> <span>Đơn Hàng</span>
			            	<span class="pull-right-container">
			              		<i class="fa fa-angle-left pull-right"></i>
			            	</span>
			          	</a>
			          	<ul class="treeview-menu">
			            	<li><a href="/AdminOrder"><i class="fa fa-circle-o"></i>Các Đơn Hàng</a></li>
			            	<li><a href="/AdminHistory"><i class="fa fa-circle-o"></i>Lịch Sử</a></li>
			          	</ul>
			        </li>
			        <li class="treeview">
			          	<a href="#">
			            	<i class="fa fa-dashboard"></i> <span>Mua Tại Shop</span>
			            	<span class="pull-right-container">
			              	<i class="fa fa-angle-left pull-right"></i>
			            	</span>
			          	</a>
			          	<ul class="treeview-menu">
			            	<li><a href="/AdminCreateOrderInshop"><i class="fa fa-circle-o"></i>Tạo Đơn Hàng</a></li>
			            	<li><a href="/AdminHistoryCreateOrderInshop"><i class="fa fa-circle-o"></i>Lịch Sử</a></li>
			          	</ul>
			        </li>
			        <li class="treeview">
			          	<a href="#">
				            <i class="fa fa-dashboard"></i> <span>Nhân Viên</span>
				            <span class="pull-right-container">
				              	<i class="fa fa-angle-left pull-right"></i>
				            </span>
			          	</a>
			          	<ul class="treeview-menu">
			                <li><a href="{{ route('registerAdmin') }}"><i class="fa fa-circle-o"></i>Thêm Nhân Viên</a></li>
				            <li><a href="{{ route('listAdmin') }}"><i class="fa fa-circle-o"></i>Danh Sách Nhân Viên</a></li>
			          	</ul>
			        </li>
			        <li class="treeview">
			          	<a href="#">
				            <i class="fa fa-dashboard"></i> <span>Thống Kê</span>
				            <span class="pull-right-container">
				              	<i class="fa fa-angle-left pull-right"></i>
				            </span>
			          	</a>
			          	<ul class="treeview-menu">
			                <li><a href="{{ route('getstatisticalOrder') }}"><i class="fa fa-circle-o"></i>Thống Kê Bán Hàng</a></li>
				            <li><a href="{{ route('getstatisticalItem') }}"><i class="fa fa-circle-o"></i>Thống Kê Sản Phẩm</a></li>
				            <li><a href="{{ route('getstatisticalItem') }}"><i class="fa fa-circle-o"></i>Thống Kê Khách Hàng</a></li>
			          	</ul>
			        </li>
		      	</ul>
		    </section>
	  	</aside>

        @yield('body')

	  	<div class="control-sidebar-bg"></div>
	</div>				
</body>

<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script>
  	$.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{asset('js/bootstrap3.js')}}"></script>
<script src="{{asset('js/raphael.min.js')}}"></script>
<script src="{{asset('js/morris.min.js')}}"></script>
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('js/jquery.knob.min.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/daterangepicker.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/lib/fastclick.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script type="text/javascript" src="{{asset('js/effect_custom.js')}}"></script>


</html>