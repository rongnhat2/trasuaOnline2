@extends('user.layout')
@section('body')

	<section class="sub_item">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="image">
					<img src="{{asset($sub_item->image)}}">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<h2><?php echo $sub_item->name; ?></h2>
				<h3 class="red"><?php echo number_format($sub_item->prices)." Đồng"; ?></h3>
				<h5><?php echo $sub_item->detail; ?></h5>
				<!-- <div class="form-group">
				  	<label for="comment">Số Lượng</label>
				  	<input class="form-control" rows="5" id="comment"></input>
				</div>  -->
				<a href="/Checkout" type="button" class="btn btn-primary">Đặt Hàng</a>
				<a href="{{route('them-gio-hang',$sub_item->id)}}" type="button" class="btn btn-success">Thêm Vào Giỏ Hàng</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<h2>Sản Phẩm Khác</h2>
				<ul>
					<?php foreach ($item as $key => $value): ?>
						<li>
							<div class="image">
								<img src="{{asset($value->image)}}">
							</div>
							<a href="/Sub_Item/<?php echo $value->id ?>"><?php echo $sub_item->name; ?></a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</section>
	<section class="relate_to">
		<h2>Sản phẩm liên quan</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
				<div class="row">
					<?php foreach ($item as $key => $value): ?>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
							<a href="/Sub_Item/<?php echo $value->id ?>" class="item">
								<div class="image">
									<img src="{{asset($value->image)}}">
								</div>
								<h3><?php echo $sub_item->name; ?></h3>
								<h4><?php echo number_format($sub_item->prices)." Đồng"; ?></h4>
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>

@endSection
		