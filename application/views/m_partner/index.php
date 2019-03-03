<div class="table-responsive">
<div class="pull-right">
	<a href="<?php echo site_url('partner/add'); ?>" class="btn btn-success" style="margin-left: 10px;">Add</a> 
</div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
    <tr>
		<th>Partner Code</th>
		<th>Partner Name</th>
		<th>Partner Detail</th>
		<th>Actions</th>
    </tr>		
	</thead>
	<tfoot>
    <tr>
		<th>Partner Code</th>
		<th>Partner Name</th>
		<th>Partner Detail</th>
		<th>Actions</th>
    </tr>				
	</tfoot>
	<tbody>
	<?php foreach($m_partner as $m){ ?>
    <tr>
		<td><?php echo $m['m_par_id']; ?></td>
		<td><?php echo $m['m_par_name']; ?></td>
		<td><?php echo $m['m_par_detail']; ?></td>
		<td>
            <a href="<?php echo site_url('m_partner/edit/'.$m['m_par_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('m_partner/remove/'.$m['m_par_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>		
	</tbody>
</table>
</div>
