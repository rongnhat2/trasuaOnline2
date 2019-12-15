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
			                  		<th>Mã Đơn Hàng</th>
			                  		<th>Hóa Đơn</th>
			                  		<th>Ngày Mua</th>
			                  		<th>Chi Tiết</th>
			                	</tr>
			                </thead>
			                <tbody>
						         <?php foreach ($item as $value): ?>
					         		<tr>
							            <td><?php echo $value->id; ?></td>
							            <td><?php echo number_format($value->count_prices)." Đồng"; ?></td>
							            <td><?php echo $value->created_at; ?></td>
							            <td><a href="/AdminHistoryInshopDetail/<?php echo $value->id; ?>">Truy Cập</a></td>
						        	</tr>
						        <?php endforeach ?>
			                </tbody>
			                <tfoot>
			              </table>
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->

			        <!-- /.col -->
			      </div>
	  		</div>
	  		{!! $item->links() !!}
	  	</div>
	  	
@endsection()