@extends('user.layout')
@section('body')

	<section class="checkout">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
				<table class="table">
				    <thead>
				      	<tr>
					        <th> Hình Ảnh </th>
					        <th> Số Lượng </th>
					        <th> Thành Tiền</th>
					        <th> Xóa </th>
				      	</tr>
				    </thead>
				    <tbody>
					@if(Session::has('cart'))
				    	 <?php foreach ($product_cart as $key => $value): ?>
					  		<tr>
					    	 	<td>
									<div class="image">
										<img src="<?php echo $product_cart[$key]['image']; ?>">
									</div>
								</td>
						        <td><?php echo $product_cart[$key]['qty']; ?></td>
						        <td><?php echo number_format($product_cart[$key]['price']) . " Đồng"; ?></td>
				                <td><a href="{{route('xoa-gio-hang',$key)}}">X</a></td>

					  		</tr>
					    <?php endforeach ?>
				    @endif
				    </tbody>
				</table>
				@if(Session::has('cart'))
				<h1>Tổng Cộng : <?php echo number_format($totalPrice) . " Đồng";  ?></h1>
				@endif
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<form role="form" action="postOrder" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					@if(Session::has('cart'))
						<input type="hidden" name="count" value="<?php echo count($product_cart) ?>">
						<input type="hidden" name="sum_prices" value="<?php echo $totalPrice ?>">
						<?php foreach ($product_cart as $key => $value): ?>
							<input type="hidden" name="item[]" value="<?php echo $key; ?>">
							<input type="hidden" name="amount[]" value="<?php echo $product_cart[$key]['qty']; ?>">
							<input type="hidden" name="prices[]" value="<?php echo $product_cart[$key]['price']; ?>">
						<?php endforeach ?>
				    @endif
					<div class="form-group">
					  	<label for="usr">Họ Và Tên:</label>
						<input type="text" name="username" class="form-control" placeholder="Họ Và Tên">
					</div>
					<div class="form-group">
					  	<label for="addr">Địa Chỉ:</label>
						<input type="text" name="address" class="form-control" placeholder="Địa Chỉ">
					</div> 	
					<div class="form-group">
					  	<label for="tele">Số Điện Thoại:</label>
						<input type="text" name="phone" class="form-control" placeholder="Số Điện Thoại">
					</div> 	
					@if(!Session::has('cart'))
					   	<button type="button" class="btn btn-defaul" style="float: right;">Thêm 1 sp vào giỏ hàng</button>
					@endif
					@if(Session::has('cart'))
					   	<button type="submit" class="btn btn-success" style="float: right;">Đặt hàng</button>
					@endif
				</form>
			</div>
		</div>
	</section>

@endSection