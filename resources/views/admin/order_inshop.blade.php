@extends('admin.layout')
@section('title',  'Tất Cả Sản Phẩm')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      <h1>
		        Kho Sản Phẩm
		        <!-- <small>Control panel</small> -->
		      </h1>
		      <ol class="breadcrumb">
		        <li><a href="/AdminCreateItem"><i class="fa fa-dashboard"></i> Thêm Sản Phẩm</a></li>
		      </ol>
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
			                  		<th>Tên</th>
			                  		<th>Hình Ảnh</th>
			                  		<th>Giá Tiền</th>
			                  		<th>Sửa</th>
			                  		<th>Xóa</th>
			                	</tr>
			                </thead>
				                <tbody> <?php foreach ($item as $value): ?>
					         		<tr>
						        		<td><?php echo $value->name; ?></td>
							            <td>
							            	<img src="{{asset($value->image)}}" style="width: 100px;">
							            </td>
							            <td><?php echo number_format($value->prices)." Đồng"; ?></td>
							            <td> <a class="btn btn-primary" href="/AdminEditItem/<?php echo $value->id; ?>">Sửa</a></td>
							            <td> <a class="btn btn-danger" href="/DeleteItem/<?php echo $value->id; ?>">Xóa</a></td>
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