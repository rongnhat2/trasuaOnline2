@extends('user.layout')
@section('body')

	<section class="bound_slide" id="header">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 padding-0">
			<div id="myCarousel2" class="carousel slide" data-ride="carousel">
			  	<ol class="carousel-indicators">
				    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel2" data-slide-to="1"></li>
				    <li data-target="#myCarousel2" data-slide-to="2"></li>
			  	</ol>
			  	<div class="carousel-inner">
			    	<div class="item active">
			      		<img src="images/banner1.png" alt="Los Angeles">
			    	</div>

				    <div class="item">
				      	<img src="images/banner1.png" alt="Chicago">
				    </div>

				    <div class="item">
				      	<img src="images/banner1.png" alt="New York">
				    </div>
			  	</div>
				<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"><i class="fas fa-chevron-circle-left"></i></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel2" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-left"><i class="fas fa-chevron-circle-right"></i></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<section class="how_to_use" id="how_to_use">
		<h3>3 bước thưởng thức</h3>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="item">
					<div class="image">
						<img src="images/icon1-1.png">
					</div>
					<h4>Bước 1</h4>
					<p>Mở nắp trà và nghiêng 45 độ, há miệng to để tận hưởng trọn vẹn vị kem cheese béo ngậy và vị trà thanh mát</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="item">
					<div class="image">
						<img src="images/icon2-1.png">
					</div>
					<h4>Bước 2</h4>
					<p>Hạ ống mút từ trên xuống dưới để thưởng thước cả kem cheese, trà và topping tùy chọn</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="item">
					<div class="image">
						<img src="images/icon3-1.png">
					</div>
					<h4>Bước 3</h4>
					<p>Khi còn khoảng 50% cốc, dùng ống mút ngoáy đều để thưởng thức vị trà sữa độc đáo của RoyalTea</p>
				</div>
			</div>
		</div>
	</section>
	<section class="menu" id="menu">
		<h1>Thực Đơn</h1>
		<div class="row">
			<?php foreach ($item as $key => $value): ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<a href="/Sub_Item/<?php echo $value->id ?>" class="item">
						<div class="image">
							<img src="{{url($value->image)}}">
						</div>
						<h4><?php echo $value->name ?></h4>
					</a>
				</div>
			<?php endforeach ?>
			

		</div>
	</section>
	<section class="contact_us" id="contact_us">
		
	</section>

@endSection
