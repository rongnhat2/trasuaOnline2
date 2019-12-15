@extends('admin.layout')
@section('body')

	  	<div class="content-wrapper">	
	  		<section class="content-header">
		      <h1>
		        Nhập Kho
		        <!-- <small>Control panel</small> -->
		      </h1>
		    </section>
	  		<div class="content">	
				<div class="row">
			        <div class="col-xs-12">
			          	<div class="box">
				            <div class="box-header">
								<div class="col-lg-2">
									<button type="" class="btn btn-success search_button" id="add_more">Thêm</button>
								</div>
				              <!-- <h3 class="box-title">Tất Cả Sản Phẩm</h3> -->
				              <!--  -->
				              <form class="search" action="{{route('import_new_item')}}" method="post" style="width: 100%;">
									{{ csrf_field() }}
									<input type="hidden" name="" id="count" value="">

				              		<div class="" id="allrow">
				              			@include('admin.row_add_shoes')
				              		</div>

									<div class="col-lg-2">
										<button type="submit" class="btn btn-success search_button">Thêm</button>
									</div>
								</form>
				            </div>
			          	</div>
			          	<!-- /.box -->

			        <!-- /.col -->
			      </div>
	  		</div>
	  	</div>
	  	<script type="text/javascript">
	  		
			// $('#add_more').click(function(){
	  //           $.get('/_new_item', function(data) {
	  //           	console.log(data);
	  //           	$("#allrow").html(data);
	  //           });
			// });
			$('#add_more').click(function(){
				console.log("1");
				$.ajax({
		            type: 'get', 
		            url : "/_new_item", 
		            success : function (data) {
						console.log("2");
		                $("#allrow").html(data);
						console.log(data);
		            }
		        });
			    // success: function(response){
			    //     $('#Id').html(response);
			    // }
			});
	  	</script>
	  	
@endsection()