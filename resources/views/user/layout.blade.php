<!DOCTYPE html>
<html>
	<head>
		<title>[ R E A L T E A ]</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" href="{{url('css/bootstrap3.css')}}" />
		<link rel="stylesheet" href="{{url('css/style.css')}}" />
		<link rel="stylesheet" href="{{url('css/responsive.css')}}" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	</head>

	<body> 
		<header>
			<div class="header_in">
				<div class="logo">
					<a href="/"><img src="{{asset('images/logo_royaltea.png')}}"></a>
				</div>
				<div class="open_nav">
					<i class="fas fa-bars"></i>
				</div>
				<nav>
					<ul class="nav_bar">
						<li>
							<a href="/">Trang chủ</a>
						</li>
						<li>
							<a class="smooth_scroll" href="#how_to_use">Giới Thiệu</a>
						</li>
						<li>
							<a class="smooth_scroll" href="#menu">Thực Đơn</a>
						</li>
						<li>
							<a class="smooth_scroll" href="#contact_us">Liên Hệ</a>
						</li>
						<li style="position: relative;">
							<a href="/Checkout">Giỏ Hàng</a>
							@if(Session::has('cart'))
								<div class="C_A_R_T">
									<?php echo count($product_cart) ?>
								</div>
							@endif 
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<main>
			@yield('body')
		</main>
		<footer>
			
		</footer>
	</body>
	<script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{url('js/bootstrap3.js')}}"></script>
	<script type="text/javascript" src="{{url('js/effect_custom.js')}}"></script>
</html>
