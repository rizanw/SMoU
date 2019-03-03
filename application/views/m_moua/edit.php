<?php echo form_open_multipart('m_moua/edit/'.$m_moua['m_moua_id'],array("class"=>"form-horizontal")); ?>
	
	<div class="form-group">
		<label for="m_moua_type" class="col-md-4 control-label">MoU/MoA</label>
		<div class="col-md-8">
			<input type="text" name="m_moua_type" value="<?php echo ($this->input->post('m_moua_type') ? $this->input->post('m_moua_type') : $m_moua['m_moua_type']); ?>" class="form-control" id="m_moua_type" />
		</div>
	</div>
	<div class="form-group">
		<label for="m_pla_id" class="col-md-4 control-label">Country</label>
		<div class="col-md-8">
			<select name="m_pla_id" class="form-control">
				<option value="">select m_place</option>
				<?php 
				foreach($all_m_place as $m_place)
				{
					$selected = ($m_place['m_pla_id'] == $m_moua['m_pla_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$m_place['m_pla_id'].'" '.$selected.'>'.$m_place['m_pla_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="m_par_id" class="col-md-4 control-label">Partner Institution</label>
		<div class="col-md-8">
			<select name="m_par_id" class="form-control">
				<option value="">select m_partner</option>
				<?php 
				foreach($all_m_partner as $m_partner)
				{
					$selected = ($m_partner['m_par_id'] == $m_moua['m_par_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$m_partner['m_par_id'].'" '.$selected.'>'.$m_partner['m_par_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="m_con_id" class="col-md-4 control-label">Contact Person</label>
		<div class="col-md-8">
			<select name="m_con_id" class="form-control">
				<option value="">select m_contact</option>
				<?php 
				foreach($all_m_contact as $m_contact)
				{
					$selected = ($m_contact['m_con_id'] == $m_moua['m_con_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$m_contact['m_con_id'].'" '.$selected.'>'.$m_contact['m_con_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="m_mut_id" class="col-md-4 control-label">Points of Cooperation</label>
		<div class="col-md-8">
			<select name="m_mut_id" class="form-control">
				<option value="">select m_mutual</option>
				<?php 
				foreach($all_m_mutual as $m_mutual)
				{
					$selected = ($m_mutual['m_mut_id'] == $m_moua['m_mut_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$m_mutual['m_mut_id'].'" '.$selected.'>'.$m_mutual['m_mut_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<input type="file" name="moua_doc" />
        </div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>