@extends('admin.layout')
@section('title',  'Tất Cả Sản Phẩm')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      	<h1>
		        	Tổng Doanh Thu
		        	<!-- <small>Control panel</small> -->
		      	</h1>
		    </section>
	  		<div class="content">	

				<div class="row">

					<!-- ROW1 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order)." Đơn Hàng" ?></h4>
				              	<p>Tổng Số Đơn Hàng</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp)." Đơn Hàng" ?></h4>
				              	<p>Đã Giao Dịch</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices)." Đồng" ?></h4>

				              	<p>Tổng Doanh Thu</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_remove)." Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>


					<!-- ROW 2 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($order_inshop)." Đơn Hàng" ?></h4>
				              	<p>Đơn Hàng Tại Quầy</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_inshop)." Đơn Hàng" ?></h4>
				              	<p>Giao Dịch Tại Quầy</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_inshop)." Đồng" ?></h4>

				              	<p>Doanh Thu Tại Quầy</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php "0 Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>

					<!-- ROW 3 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($order_online)." Đơn Hàng" ?></h4>
				              	<p>Đơn Hàng Trực Tuyến</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_online)." Đơn Hàng" ?></h4>
				              	<p>Giao Dịch Online</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_online)." Đồng" ?></h4>

				              	<p>Doanh Thu Online</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_remove)." Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>



		      	</div>
	  		</div>



	  		<section class="content-header">
		      	<h1>
		        	Ngày Hôm Nay
		        	<!-- <small>Control panel</small> -->
		      	</h1>
		    </section>
	  		<div class="content">	

				<div class="row">

					<!-- ROW1 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_today)." Đơn Hàng" ?></h4>
				              	<p>Tổng Số Đơn Hàng</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_today)." Đơn Hàng" ?></h4>
				              	<p>Đã Giao Dịch</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_today)." Đồng" ?></h4>

				              	<p>Tổng Doanh Thu</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_remove_today)." Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>


					<!-- ROW 2 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($order_inshop_today)." Đơn Hàng" ?></h4>
				              	<p>Đơn Hàng Tại Quầy</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_inshop_today)." Đơn Hàng" ?></h4>
				              	<p>Giao Dịch Tại Quầy</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_inshop_today)." Đồng" ?></h4>

				              	<p>Doanh Thu Tại Quầy</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php "0 Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>

					<!-- ROW 3 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($order_online_today)." Đơn Hàng" ?></h4>
				              	<p>Đơn Hàng Trực Tuyến</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_online_today)." Đơn Hàng" ?></h4>
				              	<p>Giao Dịch Online</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_online_today)." Đồng" ?></h4>

				              	<p>Doanh Thu Online</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_remove_today)." Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>



		      	</div>
	  		</div>

	  		<section class="content-header">
		      	<h1>
		        	Trong Tháng Này
		        	<!-- <small>Control panel</small> -->
		      	</h1>
		    </section>
	  		<div class="content">	

				<div class="row">

					<!-- ROW1 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_week)." Đơn Hàng" ?></h4>
				              	<p>Tổng Số Đơn Hàng</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_week)." Đơn Hàng" ?></h4>
				              	<p>Đã Giao Dịch</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_week)." Đồng" ?></h4>

				              	<p>Tổng Doanh Thu</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_remove_week)." Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>


					<!-- ROW 2 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($order_inshop_week)." Đơn Hàng" ?></h4>
				              	<p>Đơn Hàng Tại Quầy</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_inshop_week)." Đơn Hàng" ?></h4>
				              	<p>Giao Dịch Tại Quầy</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_inshop_week)." Đồng" ?></h4>

				              	<p>Doanh Thu Tại Quầy</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php "0 Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>

					<!-- ROW 3 -->
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-aqua">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($order_online_week)." Đơn Hàng" ?></h4>
				              	<p>Đơn Hàng Trực Tuyến</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-green">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_accepp_online_week)." Đơn Hàng" ?></h4>
				              	<p>Giao Dịch Online</p>
				            </div>
			         	 </div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-yellow">
				            <div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_prices_online_week)." Đồng" ?></h4>

				              	<p>Doanh Thu Online</p>
				            </div>
			          	</div>
			        </div>
			        <div class="col-lg-3 col-xs-6">
			          	<div class="small-box bg-red">
			            	<div class="inner" style="min-height: 100px;">
				              	<h4><?php echo number_format($count_order_remove_week)." Đơn Hàng" ?></h4>
			              		<p>Đã Hủy</p>
			            	</div>
			          	</div>
			        </div>



		      	</div>
	  		</div>
	  		
	  	</div>
	  	
@endsection()
