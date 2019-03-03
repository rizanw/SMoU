<?php echo form_open('stum/edit/'.$stum['sta_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="sta_name" class="col-md-4 control-label">State Name</label>
		<div class="col-md-8">
			<input type="text" name="sta_name" value="<?php echo ($this->input->post('sta_name') ? $this->input->post('sta_name') : $stum['sta_name']); ?>" class="form-control" id="sta_name" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>