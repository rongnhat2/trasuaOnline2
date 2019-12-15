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
			                  		<th>Họ Và Tên</th>
			                  		<th>Điện Thoại</th>
			                  		<th>Điạ Chỉ</th>
			                  		<th>Trạng Thái</th>
			                  		<th>Chi Tiết</th>
			                	</tr>
			                </thead>
			                <tbody>
						         <?php foreach ($item as $value): ?>
					         		<tr>
							            <td><?php echo $value->username; ?></td>
							            <td><?php echo $value->address; ?></td>
							            <td><?php echo $value->phone; ?></td>
							            <td><?php echo $value->action; ?></td>
							            <td><a href="/AdminOrderDetail/<?php echo $value->id; ?>">Truy Cập</a></td>
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