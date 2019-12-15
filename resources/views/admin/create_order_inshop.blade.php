@extends('admin.layout')
@section('body')

	<div class="content-wrapper">	

        <form role="form" action="{{route('CreateOrderItem')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<button type="button" class="btn btn-primary" id="add">Thêm Sản Phẩm</button>
			<div class="item">
				
			</div>
			<input type="" name="amount_prices" class="count">
			<button type="button" class="btn btn-primary" id="calc">Thành Tiền</button>
			<button type="submit" class="btn btn-success" id="">Hoàn Tất Đơn Hàng</button>
			<!-- <button type="submit" class="btn btn-success">Hoàn Tất</button> -->
		</form>
	</div>

	<script type="text/javascript">
		$(".count").val(0)
		$("#add").click(function(){
			var amounts = $(".select_item").length;
			var component = 
							"<div class=\"row mg-0 select_item_bound\" >"+
								"<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">" + 
									"<div class=\"form-group\">" +
									  	"<label>Chọn Loại:</label>" +
									  	"<select class=\"form-control select_item items\" name=\"items[]\">" +
									  		"<option>-</option>" +
									  		"<?php foreach ($item as $key => $value): ?>" +
											    "<option name=\"id\" value=\"<?php echo $value->id; ?>\">" +
											    	"<?php echo $value->name; ?>" +
											   " </option>" +
									  		"<?php endforeach ?>" +
									  	"</select>" +
									"</div>  " +
								"</div>  " +
								"<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">" + 
									"<div class=\"form-group\">" +
									  	"<label>Số Lượng:</label>" +
									  	"<input type=\"text\" class=\"form-control amounts\" name=\"amounts[]\">" +
									"</div>  " +
								"</div>  " +
								"<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">" + 
									"<div class=\"form-group\">" +
									  	"<label>Giá Tiền:</label>" +
									  	"<input type=\"text\" class=\"form-control prices\" disabled>" +
									  	"<input type=\"hidden\" class=\"form-control prices2\" name=\"prices[]\">" +
									"</div>  " +
								"</div>  " +
							"</div>";
			var component2 = 				
							"<div class=\"row mg-0\">"+
								"<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">" + 
									"<div class=\"form-group\">" +
									  	"<label>Chọn Loại:</label>" +
									  	"<select class=\"form-control select_item items\" name=\"items[]\">" +
									  		"<option>-</option>" +
									  		"<?php foreach ($item as $key => $value): ?>" +
											    "<option name=\"id\" value=\"<?php echo $value->id; ?>\">" +
											    	"<?php echo $value->name; ?>" +
											   " </option>" +
									  		"<?php endforeach ?>" +
									  	"</select>" +
										"<div class=\"prices\">" +
											
										"</div>" +
									"</div>  " +
								"</div>  " +
								"<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">" + 
									"<div class=\"form-group\">" +
									  	"<label>Số Lượng:</label>" +
									  	"<input type=\"text\" class=\"form-control amounts\" name=\"amounts[]\">" +
									"</div>  " +
								"</div>  " +
							"</div>";

			$('.item').append(component);
			eventSelect();
		})
		
		function eventSelect(){
			var prices = 0;
			var cache_prices = 0;
			var dataOutput = 0;
			var select_id = 0;


			$('.select_item').on('click',function(){
	        	let test = $(this);
				cache_prices = test.parent().parent().parent().find(".prices2").val()
				if (cache_prices === "") {
					cache_prices = 0;
				}
				// console.log(cache_prices)
			});
			$('.select_item').on('change',function(){
	        	var id = $(this).val();
	        	let test = $(this);
			    $.ajax({
			        headers: {
			            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        },
			        type: "GET",
			        data: {
	                    "id": id,
	                },
			        url: "/getdata",
			        success:function(data){ //dữ liệu nhận về
			        	dataOutput = data - 0;

						test.parent().parent().parent().find(".prices").val(dataOutput+" Đồng")
						test.parent().parent().parent().find(".prices2").val(dataOutput)
						test.parent().parent().parent().find(".amounts").val(1)
				    }
			    })
			});
			$('.amounts').on('mouseenter',function(){
	        	let test = $(this);
				cache_prices = test.parent().parent().parent().find(".prices2").val()
				if (cache_prices === "") {
					cache_prices = 0;
				}
				console.log(cache_prices)
			});
			$('.amounts').on('keyup',function(){
	        	let test = $(this);
	        	var id = test.parent().parent().parent().find(".select_item").val();
	        	var val = $(this).val();
	        	// console.log(val);
			    $.ajax({
			        headers: {
			            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        },
			        type: "GET",
			        data: {
	                    "id": id,
	                },
			        url: "/getdata",
			        success:function(data){ //dữ liệu nhận về
			        	dataOutput = (data - 0)  * val;

						test.parent().parent().parent().find(".prices2").val(dataOutput)
						test.parent().parent().parent().find(".prices").val(dataOutput+" Đồng")

				    }
			    })
			});
		}
		
		$("#calc").on('click', function(){
			var sum_prices = 0;
			for (var i = 0; i < $('.select_item').length; i++) {
				sum_prices = (sum_prices - 0) + ($('.prices2:eq(' + i + ')').val() - 0);
			}
			$(".count").val(sum_prices)
		})
        
	</script>
@endsection()