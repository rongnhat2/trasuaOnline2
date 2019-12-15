@extends('admin.layout')
@section('body')

	  	
	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      	<h1>
		        	
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
				              	<h3 class="box-title">Chi Tiết Đơn Hàng </h3>
				            </div>
				            <form role="form" action="{{route('xacnhandonhang')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
				              	<div class="box-body">
				                	<div class="form-group">
				                  		<label for="exampleInputEmail1">Tên Khách</label>
				                  		<input type="text" class="form-control" name="name" placeholder="<?php echo $data->Username; ?>" disabled="">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Số Điện Thoại</label>
				                  		<input type="text" class="form-control" name="prices" placeholder="<?php echo $data->Phonenumber; ?>" disabled="">
				                	</div>

				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Email</label>
				                  		<input type="text" class="form-control" name="" placeholder="<?php echo $data->email ; ?>" disabled="">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Địa Chỉ</label>
				                  		<input type="text" class="form-control" name="" placeholder="<?php echo $data->address ; ?>" disabled="">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Loại Giày</label>
				                  		<input type="text" class="form-control" name="" placeholder="<?php echo $data->address ; ?>" disabled="">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Chi Tiết</label>
				                  		<input type="text" class="form-control" name="" placeholder="<?php echo $data->Phonenumber; ?>" disabled="">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Giá Tiền</label>
				                  		<input type="text" class="form-control" name="" placeholder="<?php echo $data->Shoes_prices ; ?>" disabled="">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Thời Gian</label>
				                  		<input type="text" class="form-control" name="" placeholder="<?php echo $data->time ; ?>" disabled="">
				                	</div>

									<div class="form-group">
									  	<select class="form-control" id="" name="action">
									    	<option value="1">Đang chờ</option>
									    	<option value="0">Hủy Đơn</option>
									    	<option value="2">Chấp Nhận Đơn</option>
									  	</select>
									</div> 
				                  	<input type="hidden" class="form-control" name="User_id" value="<?php echo $data->User_id ; ?>">
				              	</div>
				            	<div class="box-footer">
				               	 	<button type="submit" class="btn btn-primary">Xác Nhận Đơn Hàng</button>
				            	</div>
				            </form>
				        </div>
		          	</div>
		      	</div>
	  		</div>
	  	</div>
	  	
@endsection()