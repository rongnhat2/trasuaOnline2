@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      <h1>
		        Đơn Hàng
		        <!-- <small>Control panel</small> -->
		      </h1>
		    </section>
	  		<div class="content">	
				<div class="row">
			        <div class="col-xs-12">
			          <div class="box">
			            <div class="box-header">

			            </div>
			            <!-- /.box-header -->
			            <div class="box-body">
			              <table id="example2" class="table table-bordered table-hover">
			                <thead>
			                	<tr>
			                  		<th>Sản Phẩm</th>
			                  		<th>Hình Ảnh</th>
			                  		<th>Số Lượng</th>
			                  		<th>Thành Tiền</th>
			                	</tr>
			                </thead>
			                <tbody>
						         <?php foreach ($item as $value): ?>
					         		<tr>
							            <td><?php echo $value->name; ?></td>
							            <td>
							            	<img src="{{asset($value->image)}}" style="width: 100px;">
							            </td>
							            <td><?php echo $value->amount; ?></td>
							            <td><?php echo number_format ((int) $value->prices * (int) $value->amount) . ' Đồng '; ?></td>
						        	</tr>
						        <?php endforeach ?>
			                </tbody>
			                <tfoot>
			              </table>
			              <h1><?php echo 'Tổng cộng : ' . number_format($total) . ' Đồng ' ?></h1>
			              <a href="/acceptorder/<?php echo $id ?>" style="color: green;" class="order_detail_button">Xác Nhận Đơn</a>
			              <a href="/deleteorder/<?php echo $id ?>" style="color: red;"  class="order_detail_button">Hủy Đơn</a>
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->

			        <!-- /.col -->
			      </div>
	  		</div>

	  	</div>
	  	
@endsection()