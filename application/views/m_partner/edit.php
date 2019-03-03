<?php echo form_open('m_partner/edit/'.$m_partner['m_par_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="m_par_name" class="col-md-4 control-label">Partner Institution</label>
		<div class="col-md-8">
			<input type="text" name="m_par_name" value="<?php echo ($this->input->post('m_par_name') ? $this->input->post('m_par_name') : $m_partner['m_par_name']); ?>" class="form-control" id="m_par_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="m_par_detail" class="col-md-4 control-label">Specified Unit/Department/Faculty</label>
		<div class="col-md-8">
			<input type="text" name="m_par_detail" value="<?php echo ($this->input->post('m_par_detail') ? $this->input->post('m_par_detail') : $m_partner['m_par_detail']); ?>" class="form-control" id="m_par_detail" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>