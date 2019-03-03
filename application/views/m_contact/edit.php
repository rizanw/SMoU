<?php echo form_open('m_contact/edit/'.$m_contact['m_con_id'],array("class"=>"form-horizontal")); ?>
	
	<div class="form-group">
		<label for="m_con_name" class="col-md-4 control-label">Contact Name</label>
		<div class="col-md-8">
			<input type="text" name="m_con_name" value="<?php echo ($this->input->post('m_con_name') ? $this->input->post('m_con_name') : $m_contact['m_con_name']); ?>" class="form-control" id="m_con_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="m_pla_id" class="col-md-4 control-label">Country</label>
		<div class="col-md-8">
			<select name="m_pla_id" class="form-control">
				<option value="">Select Country</option>
				<?php 
				foreach($all_m_place as $m_place)
				{
					$selected = ($m_place['m_pla_id'] == $m_contact['m_pla_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$m_place['m_pla_id'].'" '.$selected.'>'.$m_place['m_pla_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="m_con_phone" class="col-md-4 control-label">Contact Phone</label>
		<div class="col-md-8">
			<input type="text" name="m_con_phone" value="<?php echo ($this->input->post('m_con_phone') ? $this->input->post('m_con_phone') : $m_contact['m_con_phone']); ?>" class="form-control" id="m_con_phone" />
			<span class="text-danger"><?php echo form_error('m_con_phone');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="m_con_email" class="col-md-4 control-label">Contact Email</label>
		<div class="col-md-8">
			<input type="text" name="m_con_email" value="<?php echo ($this->input->post('m_con_email') ? $this->input->post('m_con_email') : $m_contact['m_con_email']); ?>" class="form-control" id="m_con_email" />
			<span class="text-danger"><?php echo form_error('m_con_email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="m_con_role" class="col-md-4 control-label">Contact Role</label>
		<div class="col-md-8">
			<input type="text" name="m_con_role" value="<?php echo ($this->input->post('m_con_role') ? $this->input->post('m_con_role') : $m_contact['m_con_role']); ?>" class="form-control" id="m_con_role" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>