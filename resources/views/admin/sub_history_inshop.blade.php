@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      <h1>
		        Lịch Sử
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
			                  		<th>Tên Mặt Hàng</th>
			                  		<th>Đơn Giá</th>
			                  		<th>Số Lượng</th>
			                  		<th>Thành Tiền</th>
			                  		<th>Thời Gian</th>
			                	</tr>
			                </thead>
			                <tbody>
						         <?php foreach ($item as $value): ?>
					         		<tr>
							            <td><?php echo $value->name; ?></td>
							            <td><?php echo $value->prices; ?></td>
							            <td><?php echo $value->amount; ?></td>
							            <td><?php echo "Giá " . number_format($value->amount_prices)." Đồng"; ?></td>
							            <td><?php echo $value->created_at; ?></td>
						        	</tr>
						        <?php endforeach ?>
			                </tbody>
			                <tfoot>
			              </table>
			              <h1><?php echo 'Tổng cộng : ' . number_format($total) . ' Đồng ' ?></h1>
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->

			        <!-- /.col -->
			      </div>
	  		</div>
	  	</div>
	  	
@endsection()