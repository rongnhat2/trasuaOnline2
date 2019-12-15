@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      	<h1>
		        	Các thuộc tính của giày
		      	</h1>
		      	<ol class="breadcrumb">
		        	<li><a href="#"><i class="fa fa-bar"></i></a></li>
		      	</ol>
		    </section>
	  		<div class="content">	
		     	<div class="row">
			        <div class="col-md-4">
			          	<div class="box box-primary">
				            <div class="box-header with-border">
				              	<h2 class="box-title">Màu</h2>
				              	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="float: right;">Thêm Màu</button>

								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
								  	<div class="modal-dialog">
			              				<form class="search" action="{{route('addColor')}}" method="post">
			              					{{ csrf_field() }}
								    		<div class="modal-content">
								      			<div class="modal-header">
								        			<button type="button" class="close" data-dismiss="modal">&times;</button>
								        			<h4 class="modal-title">Thêm Màu</h4>
								      			</div>
									      		<div class="modal-body">
									       			<input type="" name="color" style="padding: 3px 5px;width: 100%;" placeholder="nhập tên màu">
									      		</div>
									      		<div class="modal-footer">
									        		<button type="submit" class="btn btn-default">Thêm</button>
									      		</div>
									    	</div>
										</form>
								  	</div>
								</div>
				            </div>
				            <table id="example2" class="table table-bordered table-hover">
				                <thead>
				                	<tr>
				                  		<th>ID</th>
				                  		<th>Tên màu</th>
				                	</tr>
				                </thead>
				                <tbody>
						         	<?php foreach ($color as $value): ?>
						         		<tr>
							        		<td><?php echo $value->color_id; ?></td>
								            <td><?php echo $value->color_name; ?></td>
							        	</tr>
						        	<?php endforeach ?>
			               	 	</tbody>
			              	</table>
				        </div>
		          	</div>
			        <div class="col-md-4">
			          	<div class="box box-primary">
				            <div class="box-header with-border">
				              	<h3 class="box-title">Thuộc Tính</h3>
				              	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2" style="float: right;">Thêm Thuộc Tính</button>
								<div id="myModal2" class="modal fade" role="dialog">
								  	<div class="modal-dialog">
			              				<form class="search" action="{{route('addPro')}}" method="post">
			              					{{ csrf_field() }}
								    		<div class="modal-content">
								      			<div class="modal-header">
								        			<button type="button" class="close" data-dismiss="modal">&times;</button>
								        			<h4 class="modal-title">Thêm Thuộc Tính</h4>
								      			</div>
									      		<div class="modal-body">
									       			<input type="" name="description" style="padding: 3px 5px;width: 100%;" placeholder="nhập tên Thuộc Tính">
									      		</div>
									      		<div class="modal-footer">
									        		<button type="submit" class="btn btn-default">Thêm</button>
									      		</div>
									    	</div>
										</form>
								  	</div>
								</div>
				            </div>
				            <table id="example2" class="table table-bordered table-hover">
				                <thead>
				                	<tr>
				                  		<th>ID</th>
				                  		<th>Tên Thuộc Tính</th>
				                	</tr>
				                </thead>
				                <tbody>
						         	<?php foreach ($description as $value): ?>
						         		<tr>
							        		<td><?php echo $value->description_id; ?></td>
								            <td><?php echo $value->description_name; ?></td>
							        	</tr>
						        	<?php endforeach ?>
			               	 	</tbody>
			              	</table>
				        </div>
		          	</div>
			        <div class="col-md-4">
			          	<div class="box box-primary">
				            <div class="box-header with-border">
				              	<h3 class="box-title">Kích Thước</h3>
				              	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3" style="float: right;">Thêm Kích Thước</button>
								<div id="myModal3" class="modal fade" role="dialog">
								  	<div class="modal-dialog">
			              				<form class="search" action="{{route('addSize')}}" method="post">
			              					{{ csrf_field() }}
								    		<div class="modal-content">
								      			<div class="modal-header">
								        			<button type="button" class="close" data-dismiss="modal">&times;</button>
								        			<h4 class="modal-title">Thêm Kích Thước</h4>
								      			</div>
									      		<div class="modal-body">
									       			<input type="" name="size" style="padding: 3px 5px;width: 100%;" placeholder="nhập Kích Thước">
									      		</div>
									      		<div class="modal-footer">
									        		<button type="submit" class="btn btn-default">Thêm</button>
									      		</div>
									    	</div>
										</form>
								  	</div>
								</div>
				            </div>
				            <table id="example2" class="table table-bordered table-hover">
				                <thead>
				                	<tr>
				                  		<th>ID</th>
				                  		<th>Tên Kích Thước</th>
				                	</tr>
				                </thead>
				                <tbody>
						         	<?php foreach ($size as $value): ?>
						         		<tr>
							        		<td><?php echo $value->size_id; ?></td>
								            <td><?php echo $value->size_name; ?></td>
							        	</tr>
						        	<?php endforeach ?>
			               	 	</tbody>
			              	</table>
				        </div>
		          	</div>
		      	</div>
	  		</div>
	  	</div>
	  	
@endsection()