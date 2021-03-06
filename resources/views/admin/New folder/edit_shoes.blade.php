@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<!-- <section class="content-header">
		      	<h1>
		        	
		      	</h1>
		      	<ol class="breadcrumb">
		        	<li><a href="#"><i class="fa fa-bar"></i></a></li>
		      	</ol>
		    </section> -->
	  		<div class="content">	
		     	<div class="row">
			        <div class="col-md-6">
			          	<div class="box box-primary">
				            <div class="box-header with-border">
				              	<h3 class="box-title">Sửa Thuộc Tính</h3>
				            </div>
				            <form role="form" action="{{route('update_shoes')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
				              	<div class="box-body">
				                	<div class="form-group">
				                  		<label for="exampleInputEmail1">Tên Giày</label>
				                  		<input type="text" class="form-control" name="name" placeholder="" disabled="" value="<?php echo $data->Shoes_name ?>">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Giá Tiền</label>
				                  		<input type="text" class="form-control" name="prices" placeholder="Nhập Giá Tiền" value="<?php echo $data->Shoes_prices ?>">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Thuộc Tính</label>

									  	<select class="form-control" id="sel1" name="Format">
									    	<option value="0" <?php if ($data->Format == 0) { echo "selected"; } ?> >Không có</option>
									    	<option value="1" <?php if ($data->Format == 1) { echo "selected"; } ?> >Mới</option>
									    	<option value="2" <?php if ($data->Format == 2) { echo "selected"; } ?> >Giảm Giá</option>
									    	<option value="3" <?php if ($data->Format == 3) { echo "selected"; } ?> >Bán Chạy</option>
									    	<!-- <option value="4">Nổi Bật</option> -->
									  	</select>
				                  		<!-- <input type="text" class="form-control" name="prices" placeholder="Nhập Giá Tiền" value="<?php echo $data->Shoes_sale ?>"> -->
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Giảm Giá</label>
				                  		<input type="text" class="form-control" name="sale" placeholder="Nhập Giá Tiền" value="<?php echo $data->Shoes_sale ?>">
				                	</div>

				                	<div class="form-group">
				                  		<label for="exampleInputPassword1"> Thuộc Tính</label>

									  	<select class="form-control" id="sel1" name="prop">
									    	<?php foreach ($prop as $key => $value): ?>
									    		<option value="<?php echo $value->description_name ?>"
									    		 <?php if ($data->Shoes_description == $value->description_name) { echo "selected"; } ?> ><?php echo $value->description_name ?></option>
									    	<?php endforeach ?>
									  	</select>
									
				                  		<!-- <input type="text" class="form-control" name="" placeholder="(tính năng đang cập nhật)"> -->
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1"> Kích Thước</label>

									  	<select class="form-control" id="sel1" name="size">
									    	<?php foreach ($size as $key => $value): ?>
									    		<option value="<?php echo $value->size_name ?>"
									    		<?php if ($data->Shoes_size == $value->size_name) { echo "selected"; } ?> 
									    		><?php echo $value->size_name ?></option>
									    	<?php endforeach ?>
									  	</select>
				                  		
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1"> Màu Sắc </label>


									  	<select class="form-control" id="sel1" name="color">
									    	<?php foreach ($color as $key => $value): ?>
									    		<option value="<?php echo $value->color_name ?>"
									    		<?php if ($data->Shoes_color == $value->color_name) { echo "selected"; } ?> >
									    		<?php echo $value->color_name ?></option>
									    	<?php endforeach ?>
									  	</select>
				                	</div>
				                	<div class="form-group">
				                  		<input type="hidden" class="form-control" name="Shoes_id" value="<?php echo $data->Shoes_id; ?>">
				                	</div>
				                	<!-- <div class="form-group"> -->
				                  		<!-- <label for="exampleInputFile">Chọn Hình Ảnh</label> -->
				                  		<!-- <input type="file" id="exampleInputFile" name="hinhanh" required="true"> -->
				                  		<!-- <input type="file" id="exampleInputFile" name="image"> -->
				                	<!-- </div> -->
				              	</div>
				            	<div class="box-footer">
				               	 	<button type="submit" class="btn btn-primary">Cập Nhật</button>
				               	 	<a class="" href="{{route('adminallitem')}}" style="float: right;padding: 6px 12px;background-color: red;border-radius: 3px;color: white;">Hủy</a>
				            	</div>
				            	
				            </form>
				        </div>
		          	</div>
		      	</div>
	  		</div>
	  	</div>
	  	
@endsection()