<div class="table-responsive">
<div class="pull-right">
	<a href="<?php echo site_url('contact/add'); ?>" class="btn btn-success" style="margin-left: 10px;">Add</a> 
</div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
    <tr>
		<th>Contact Code</th>
		<th>Contact Name</th>
		<th>Country</th>
		<th>Contact Phone</th>
		<th>Contact Email</th>
		<th>Contact Role</th>
		<th>Actions</th>
    </tr>		
	</thead>
	<tfoot>
    <tr>
		<th>Contact Code</th>
		<th>Contact Name</th>
		<th>Country</th>
		<th>Contact Phone</th>
		<th>Contact Email</th>
		<th>Contact Role</th>
		<th>Actions</th>
    </tr>
	</tfoot>
	<tbody>
	<?php foreach($m_contact as $m){ ?>
    <tr>
		<td><?php echo $m['m_con_id']; ?></td>
		<td><?php echo $m['m_con_name']; ?></td>
		<td><?php
		foreach($all_m_place as $pla){
			if($m['m_pla_id'] == $pla['m_pla_id']) echo $pla['m_pla_name'];
		}
		?></td>
		<td><?php echo $m['m_con_phone']; ?></td>
		<td><?php echo $m['m_con_email']; ?></td>
		<td><?php echo $m['m_con_role']; ?></td>
		<td>
            <a href="<?php echo site_url('m_contact/edit/'.$m['m_con_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('m_contact/remove/'.$m['m_con_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>		
	</tbody>
</table>
