@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      <h1>
		        Kho Giày
		        <!-- <small>Control panel</small> -->
		      </h1>
		      <ol class="breadcrumb">
		        <li><a href="/adminadditem"><i class="fa fa-dashboard"></i> Thêm Giày</a></li>
		      </ol>
		    </section>
	  		<div class="content">	
				<div class="row">
			        <div class="col-xs-12">
			          <div class="box">
			            <div class="box-header">
			              <!-- <h3 class="box-title">Tất Cả Sản Phẩm</h3> -->
			              <form class="search" action="{{route('admin_search_item')}}" method="get" style="width: 100%;">
								{{ csrf_field() }}

			              	<!-- <form class="search"> -->
								<div class="col-lg-2">
									<div class="form-group">
										<input type="" name="name" class="form-input" style="padding: 3px 5px;width: 100%;height: 34px;border-color: #d2d6de" placeholder="Mã, Tên, .....">
									</div> 
								</div>
								<div class="col-lg-2">
									<div class="form-group">
									  	<select class="form-control" id="sel1" name="color">
									    	<option value="0">Tất Cả</option>
									    	<?php foreach ($color as $key => $value): ?>
									    		<option value="<?php echo $value->color_name ?>"><?php echo $value->color_name ?></option>
									    	<?php endforeach ?>
									  	</select>
									</div> 
								</div>
								<div class="col-lg-2">
									<div class="form-group">
									  	<select class="form-control" id="sel1" name="size">
									    	<option value="0">Tất Cả</option>
									    	<?php foreach ($size as $key => $value): ?>
									    		<option value="<?php echo $value->size_name ?>"><?php echo $value->size_name ?></option>
									    	<?php endforeach ?>
									  	</select>
									</div> 
								</div>
								<div class="col-lg-2">
									<div class="form-group">
									  	<select class="form-control" id="sel1" name="prop">
									    	<option value="0">Tất Cả</option>
									    	<?php foreach ($prop as $key => $value): ?>
									    		<option value="<?php echo $value->description_name ?>"><?php echo $value->description_name ?></option>
									    	<?php endforeach ?>
									  	</select>
									</div> 
								</div>
								<div class="col-lg-2">
									<div class="form-group">
									  	<select class="form-control" id="sel1" name="format">
									    	<option value="0">Tất Cả</option>
									    	<option value="1">Mới</option>
									    	<option value="2">Giảm Giá</option>
									    	<option value="3">Bán Chạy</option>
									    	<!-- <option value="4">Nổi Bật</option> -->
									  	</select>
									</div> 
								</div>
								<div class="col-lg-2">
									<button type="submit" class="btn btn-success search_button">Search</button>
								</div>
							</form>

			            </div>
			            <!-- /.box-header -->
			            <div class="box-body">
			            	<!-- <div class="row">
			            		<?php foreach ($data as $key => $value): ?>
				            		<div class="col-md-3" style="height: 300px;background-color: rgba(0, 0, 0, .3);border: 1px solid black">
				            			
				            		</div>
				            	<?php endforeach ?>
			            	</div> -->
			            	<div class="box-body">
				              <table id="example2" class="table table-bordered table-hover">
				                <thead>
				                	<tr>
				                  		<th>ID</th>
				                  		<th>Tên Giày</th>
				                  		<th>Hình Ảnh</th>
				                  		<th>Số Lượng</th>
				                  		<th>Giá Tiền</th>
				                  		<th>Giảm Giá</th>
				                  		<th>Định Dạng</th>
				                  		<th>Truy Cập</th>
				                  		<th>Sửa</th>
				                	</tr>
				                </thead>
				                <tbody>

				         <?php foreach ($data as $value): ?>
			         		<tr>
				        		<td><?php echo $value->Shoes_id; ?></td>
					            <td><?php echo $value->Shoes_name; ?></td>
					            <td>
					            	<img src="{{asset($value->Shoes_image)}}" style="width: 100px;">
					            </td>
					            <td><?php echo $value->Column; ?></td>
					            <td><?php echo $value->Shoes_prices; ?> đ</td>
					            <td><?php echo $value->Shoes_sale; ?> đ</td>
					            <td>
									<?php if ($value->Format == 1): ?>
										<div class="offer_title new">
											<?php echo "Mới" ?>
										</div>
									<?php elseif ($value->Format == 2): ?>
										<div class="offer_title sale">
											<?php echo 'Giảm Giá' ?>
										</div>
									<?php elseif ($value->Format == 3): ?>
										<div class="offer_title hot">
											<?php echo 'Bán Chạy' ?>
										</div>
									<?php endif ?>
					            </td>
					            <td><a href="/product/<?php echo $value->Shoes_id; ?>">Link</a></td>
					            <td><a href="/edit_shoes/<?php echo $value->Shoes_id; ?>">EDIT</a></td>
				        	</tr>
				        <?php endforeach ?>
				                </tbody>
				                <tfoot>
				              </table>
				            </div>
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->

			        <!-- /.col -->
			      </div>
	  		</div>
	  		 {{ $data->appends(['format' => $format, 'size' => $size2, 'prop' => $prop2, 'color' => $color2])->links() }}
	  	</div>
	  	
@endsection()