<?php echo form_open('m_mutual/edit/'.$m_mutual['m_mut_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="m_mut_name" class="col-md-4 control-label">Points of Cooperation</label>
		<div class="col-md-8">
			<input type="text" name="m_mut_name" value="<?php echo ($this->input->post('m_mut_name') ? $this->input->post('m_mut_name') : $m_mutual['m_mut_name']); ?>" class="form-control" id="m_mut_name" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>