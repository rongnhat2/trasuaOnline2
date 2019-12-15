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
			              <form class="search" action="{{route('admin_search_item')}}" method="get" style="width: 100%;">
								{{ csrf_field() }}
								<div class="col-lg-4">
									<div class="form-group">
										<input type="" name="" class="form-input" style="width: 100%;height: 34px;border-color: #d2d6de">
									</div> 
								</div>
								<div class="col-lg-2">
									<button type="submit" class="btn btn-success search_button">Search</button>
								</div>
							</form>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body">
			              <table id="example2" class="table table-bordered table-hover">
			                <thead>
			                	<tr>
			                  		<th>Họ Và Tên</th>
			                  		<th>Tên Giày</th>
			                  		<th>Ngày</th>
			                  		<th>Trạng Thái</th>
			                  		<th>Chi Tiết Đơn Hàng</th>
			                	</tr>
			                </thead>
			                <tbody>
			         <?php foreach ($data as $value): ?>
		         		<tr>
				            <td><?php echo $value->Username; ?></td>
				            <td><?php echo $value->Shoes_code; ?></td>
				            <td><?php echo $value->time; ?></td>
				            <td>
				            	<?php 
					            	if ($value->action == 1){
					            		echo "Đang Chờ";
						            }
					            ?>
				            </td>
				            <td><a href="/order_view/<?php echo $value->User_id; ?>">Truy Cập</a></td>
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
	  		{!! $data->links() !!}
	  	</div>
	  	
@endsection()