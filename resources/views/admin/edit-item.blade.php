@extends('admin.layout')
@section('title',  'Sửa Sản Phẩm')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      	<h1>
		        	Sửa Mặt Hàng
		      	</h1>
		      	<ol class="breadcrumb">
		        	<li><a href="#"><i class="fa fa-bar"></i></a></li>
		      	</ol>
		    </section>
	  		<div class="content">	
		     	<div class="row">
			        <div class="col-md-6">
			          	<div class="box box-primary">
				            <div class="box-header with-border">
				              	<h3 class="box-title">Sửa Mặt Hàng</h3>
				            </div>
				            <form role="form" action="{{route('EditItem')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
				              	<div class="box-body">
				                	<div class="form-group" style="display: none;">
				                  		<label for="exampleInputEmail1"></label>
				                  		<input type="text" class="form-control" name="id" value="<?php echo $data->id; ?>">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputEmail1">Tên Sản Phẩm</label>
				                  		<input type="text" class="form-control" name="name" placeholder="<?php echo $data->name; ?>" value="<?php echo $data->name; ?>">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Giá Tiền</label>
				                  		<input type="text" class="form-control" name="price" placeholder="<?php echo $data->prices; ?>" value="<?php echo $data->prices; ?>">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1"> Thông tin chi tiết</label>
				                  		<textarea class="form-control" aria-label="With textarea" name="detail"><?php echo $data->detail; ?></textarea>
				                	</div>
				              	</div>
				            	<div class="box-footer">
				               	 	<button type="submit" class="btn btn-primary">Cập Nhật</button>
				               	 	<a class="{{route('getAdminAllItem')}}" href="" style="float: right;padding: 6px 12px;background-color: red;border-radius: 3px;color: white;">Hủy</a>
				            	</div>
				            	
				            </form>
				        </div>
		          	</div>
		      	</div>
	  		</div>
	  	</div>
	  	
@endsection()