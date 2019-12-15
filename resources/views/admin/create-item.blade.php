@extends('admin.layout')
@section('title',  'Tạo Sản Phẩm')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      	<h1>
		        	Thêm Sản Phẩm
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
				              	<h3 class="box-title">Thêm Sản Phẩm Mới</h3>
				            </div>
				            <form role="form" action="{{route('CreateItem')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
				              	<div class="box-body">
				                	<div class="form-group">
				                  		<label for="exampleInputEmail1">Tên Sản Phẩm Mới</label>
				                  		<input type="text" class="form-control" name="name" placeholder="Nhập Sản Phẩm">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1">Giá Tiền</label>
				                  		<input type="text" class="form-control" name="price" placeholder="Nhập Giá Tiền">
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputPassword1"> Thông tin chi tiết</label>
				                  		<textarea class="form-control" aria-label="With textarea" name="detail"></textarea>
				                	</div>
				                	<div class="form-group">
				                  		<label for="exampleInputFile">Chọn Hình Ảnh</label>
				                  		<!-- <input type="file" id="exampleInputFile" name="hinhanh" required="true"> -->
				                  		<input type="file" id="exampleInputFile" name="image">
				                	</div>
				              	</div>
				            	<div class="box-footer">
				               	 	<button type="submit" class="btn btn-primary">Thêm</button>
				               	 	<a class="" href="" style="float: right;padding: 6px 12px;background-color: red;border-radius: 3px;color: white;">Hủy</a>
				            	</div>
				            	
				            </form>
				        </div>
		          	</div>
		      	</div>
	  		</div>
	  	</div>
	  	
@endsection()