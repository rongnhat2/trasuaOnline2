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
			              <form class="search" action="{{route('admin_search_item')}}" method="post">
								{{ csrf_field() }}
								<div class="col-lg-3">
									<div class="form-group">
									  	<select class="form-control" id="sel1">
									    	<option>Kích Thước (tính năng đang cập nhật)</option>
									    	<option>37</option>
									    	<option>38</option>
									    	<option>39</option>
									    	<option>40</option>
									    	<option>41</option>
									    	<option>42</option>
									  	</select>
									</div> 
								</div>
								<div class="col-lg-3">
									<div class="form-group">
									  	<select class="form-control" id="sel1">
									    	<option>Thuộc Tính (tính năng đang cập nhật)</option>
									    	<option>Trơn</option>
									    	<option>Vân</option>
									    	<option>Dây</option>
									  	</select>
									</div> 
								</div>
								<div class="col-lg-3">
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
								<div class="col-lg-3">
									<button type="submit" class="btn btn-success search_button">Search</button>
								</div>
							</form>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body">
			              <table id="example2" class="table table-bordered table-hover">
			                <thead>
			                	<tr>
			                  		<th>ID</th>
			                  		<th>Tên Giày</th>
			                  		<th>Số Lượng</th>
			                  		<th>Hình Ảnh</th>
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
				            <td><?php echo $value->Column; ?></td>
				            <td>
				            	<img src="{{asset($value->Shoes_image)}}" style="width: 100px;">
				            	<!-- <?php echo $value->Shoes_image; ?> -->
				            		
				            </td>
				            <td><?php echo $value->Shoes_prices; ?></td>
				            <td><?php echo $value->Shoes_sale; ?></td>
				            <td>
				            	<?php 
					            	if ($value->Format == 0){
					            		echo "Cũ";
						            } elseif ($value->Format == 1) {
						            	echo "Mới";
						            }elseif ($value->Format == 3) {
						            	echo "Bán Chạy";
						            }else{
						            	echo "Giảm Giá";
						            }
					            ?>
				            </td>
				            <td><a href="/product/<?php echo $value->Shoes_id; ?>">Link</a></td>
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