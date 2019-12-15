<div class="row">
	<div class="col-lg-2">
		<div class="form-group">
			<select class="form-control" id="sel1" name="giay">
		    	<?php foreach ($giay as $key => $value): ?>
		    		<option value="<?php echo $value->Shoes_name ?>"><?php echo $value->Shoes_name ?>
		    			
		    		</option>
		    	<?php endforeach ?>
		  	</select>
		</div> 
	</div>
	<div class="col-lg-2">
		<div class="form-group">
		  	<select class="form-control" id="sel1" name="size">
		    	<?php foreach ($size as $key => $value): ?>
		    		<option value="<?php echo $value->size_name ?>"><?php echo $value->size_name ?></option>
		    	<?php endforeach ?>
		  	</select>
		</div> 
	</div>
	<div class="col-lg-2">
		<div class="form-group">
			<input type="" name="count" class="form-input" style="padding: 3px 5px;width: 100%;height: 34px;border-color: #d2d6de" placeholder="Số Lượng">
		</div> 
	</div>
</div>