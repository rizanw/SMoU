<?php echo form_open('cit/edit/'.$cit['cit_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="cit_name" class="col-md-4 control-label">City Name</label>
		<div class="col-md-8">
			<input type="text" name="cit_name" value="<?php echo ($this->input->post('cit_name') ? $this->input->post('cit_name') : $cit['cit_name']); ?>" class="form-control" id="cit_name" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>