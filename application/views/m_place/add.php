<?php echo form_open('m_place/add',array("class"=>"form-horizontal")); ?>
	<div class="form-group">
		<label for="m_pla_name" class="col-md-4 control-label">Country</label>
		<div class="col-md-8">
			<input type="text" name="m_pla_name" value="<?php echo $this->input->post('Country Name'); ?>" class="form-control" id="m_pla_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="sta_id" class="col-md-4 control-label">State</label>
		<div class="col-md-8">
			<select name="sta_id" class="form-control">
				<option value="">Select State</option>
				<?php 
				foreach($all_sta as $stum)
				{
					$selected = ($stum['sta_id'] == $this->input->post('sta_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$stum['sta_id'].'" '.$selected.'>'.$stum['sta_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="cit_id" class="col-md-4 control-label">City</label>
		<div class="col-md-8">
			<select name="cit_id" class="form-control">
				<option value="">Select City</option>
				<?php 
				foreach($all_cit as $cit)
				{
					$selected = ($cit['cit_id'] == $this->input->post('cit_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$cit['cit_id'].'" '.$selected.'>'.$cit['cit_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>